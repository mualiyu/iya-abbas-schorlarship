<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use ZipArchive;

class HomeController extends Controller
{
    public function index()
    {
        $scholarshipApplications = ScholarshipApplication::latest()->paginate(10);

        return view('dashboard', compact('scholarshipApplications'));
    }

    public function downloadApplicationDocuments(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'application' => 'required|integer',
        // ]);

        // if ($validator->fails()) {
        //     return back()->withErrors($validator);
        // }

        $applications = ScholarshipApplication::all();
        if ($applications->isEmpty()) {
            return back()->with('error', 'No applications found to download');
        }

        // Ensure storage directory exists
        $storageDir = storage_path('app/public/applicants_documents_zip');
        if (!file_exists($storageDir)) {
            mkdir($storageDir, 0755, true);
        }

        $zip = new ZipArchive;
        $fileName = 'applicants_documents_zip/Application_Docs-' . date('Y-m-d') . '.zip';
        $zipPath = storage_path('app/public/' . $fileName);

        if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            return back()->with('error', 'Could not create zip archive');
        }

        $hasFiles = false;
        foreach ($applications as $file) {
            $baseFolder = $file->gender . '/' . $file->institution . '/' . $file->name;

            $documents = [
                'admission_' => $file->admission_letter,
                'semester_' => $file->last_semester_result,
                'receipt_' => $file->registration_receipt,
                'letter_' => $file->indigene_letter,
                'photo_' => $file->passport_photo
            ];

            foreach ($documents as $prefix => $document) {
                if (!empty($document)) {
                    $filePath = storage_path('app/private/public/applications/' . $document);
                    if (file_exists($filePath)) {
                        $zip->addFile($filePath, $baseFolder . '/' . $prefix . $document);
                        $hasFiles = true;
                    }
                }
            }
        }

        $zip->close();

        if (!$hasFiles) {
            unlink($zipPath);
            return back()->with('error', 'No documents found to download');
        }

        if (!file_exists($zipPath)) {
            return back()->with('error', 'Failed to create zip file');
        }

        return response()->download($zipPath)->deleteFileAfterSend(true);
    }

    public function activateApplication(Request $request)
    {
        $request->validate([
            'isActive' => 'required|boolean'
        ]);

        config(['app.application' => $request->isActive]);

        // Write to .env file
        $envFile = base_path('.env');
        $envContent = file_get_contents($envFile);
        $envContent = preg_replace(
            '/APP_APPLICATION=(.*)/',
            'APP_APPLICATION=' . ($request->isActive ? 'true' : 'false'),
            $envContent
        );
        file_put_contents($envFile, $envContent);

        return back()->with('success', 'Application activated successfully');
    }
}
