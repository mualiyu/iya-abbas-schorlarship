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

    Route::post('/applications/download/zip', [HomeController::class, 'downloadApplicationDocuments'])->name('applications.download.zip');
    Route::post('/applications/activate', [HomeController::class, 'activateApplication'])->name('applications.activate');
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

// Main website routes
Route::get('/about', [App\Http\Controllers\MainController::class, 'about'])->name('about');
Route::get('/legislative', [App\Http\Controllers\MainController::class, 'legislative'])->name('legislative');
Route::get('/news', [App\Http\Controllers\MainController::class, 'news'])->name('news');
Route::get('/contact', [App\Http\Controllers\MainController::class, 'contact'])->name('contact');
Route::get('/empowerment', [App\Http\Controllers\MainController::class, 'empowerment'])->name('empowerment');

// Contact form submission
Route::post('/contact', [App\Http\Controllers\MainController::class, 'submitContact'])->name('contact.submit');

// Others routes (Test)
// Route::get('/scholarships', [App\Http\Controllers\MainController::class, 'scholarships'])->name('scholarships');
// Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('home');
