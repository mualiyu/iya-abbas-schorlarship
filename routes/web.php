<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScholarshipApplicationController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::view('/', 'main.index')
    ->name('main.index');

Route::view('/application', 'main.application')
    ->name('main.application');

    // store method in ScholarshipApplicationController
Route::post('/application', 'App\Http\Controllers\ScholarshipApplicationController@store')->name("main.store.scholarship");

Route::get('/admin', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/applications', [ScholarshipApplicationController::class, 'index'])->name('applications.index');
    Route::get('/applications/{application}', [ScholarshipApplicationController::class, 'show'])->name('applications.show');
    Route::post('/applications/export', [ScholarshipApplicationController::class, 'export'])->name('applications.export');
});

require __DIR__ . '/auth.php';

Route::get('storage/{p}/{filename}', function ($p, $filename)
{
    $path = storage_path('app/private/public/'.$p.'/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
