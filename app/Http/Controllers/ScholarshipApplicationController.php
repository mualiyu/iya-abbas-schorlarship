<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ScholarshipApplicationController extends Controller
{
    public function store(Request $request) 
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'institution' => 'required|string|max:255',
            'registration_no' => 'required|string|max:255',
            'course_of_study' => 'required|string|max:255',
            'duration' => 'required|integer',
            'level' => 'required|string|max:255',
            'year_of_admission' => 'required|integer',
            'date_of_birth' => 'required|date',
            'marital_status' => 'required|in:single,married',
            'permanent_address' => 'required|string',
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'gsm_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'local_government' => 'nullable|string|max:255',
            'ward' => 'nullable|string|max:255',
            'voter_card' => 'required|image|max:2048',
            'admission_letter' => 'required|image|max:2048',
            'last_semester_result' => 'required|image|max:2048',
            'registration_receipt' => 'required|image|max:2048',
            'indigene_letter' => 'required|image|max:2048',
            'ssce' => 'required|image|max:2048',
            'passport_photo' => 'required|image|max:2048',
            'signature' => 'required|image|max:2048',
        ]);

        // Handle file uploads
        $fileFields = [
            'voter_card',
            'admission_letter',
            'last_semester_result',
            'registration_receipt',
            'indigene_letter',
            'ssce',
            'passport_photo',
            'signature'
        ];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $fileName = time() . '_' . $field . '.' . $request->file($field)->getClientOriginalExtension();
                $filePath = $request->file($field)->storeAs('public/applications', $fileName);
                $validated[$field] = $fileName;
            }
        }

        try {
            // Create the scholarship application
            ScholarshipApplication::create($validated);
            
            return redirect()->back()->with('success', 'Application submitted successfully! An email will be sent to you accordingly.');

        } catch (\Exception $e) {
            return redirect()->back()
                           ->with('error', 'Error submitting application. Please try again.')
                           ->withInput();
        }
    }

    public function index()
    {
        $applications = ScholarshipApplication::latest()->paginate(10);
        return view('admin.applications.index', compact('applications'));
    }
}
