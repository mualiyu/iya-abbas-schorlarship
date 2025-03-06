<?php

namespace App\Http\Controllers;

use App\Exports\ApplicationsExport;
use App\Models\ScholarshipApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ScholarshipApplicationController extends Controller
{
    public function store(Request $request) 
    {
        // return $request->all();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'institution' => 'required|string|max:255',
            'institution_o' => 'nullable|string|max:255',
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
            'gsm_number' => 'required|string|max:255|unique:scholarship_applications,gsm_number',
            'email' => 'required|email|max:255|unique:scholarship_applications,email',
            'local_government' => 'nullable|string|max:255',
            'ward' => 'nullable|string|max:255',

            // 'voter_card' => 'nullable',
            'admission_letter' => 'required',
            'last_semester_result' => 'nullable',
            'registration_receipt' => 'required',
            'indigene_letter' => 'required',
            // 'ssce' => 'required',
            'passport_photo' => 'required',
            // 'signature' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        if ($request->institution == "Others") {
            
            $request->institution = $request->institution_o;
        }

        // Handle file uploads
        // $fileFields = [
        //     // 'voter_card',
        //     'admission_letter',
        //     'last_semester_result',
        //     'registration_receipt',
        //     'indigene_letter',
        //     // 'ssce',
        //     'passport_photo',
        //     // 'signature'
        // ];

        // foreach ($fileFields as $field) {
        //     if ($request->hasFile($field)) {
        //         $fileName = time() . '_' . $field . '.' . $request->file($field)->getClientOriginalExtension();
        //         $filePath = $request->file($field)->storeAs('public/applications', $fileName);
        //         $request->$field = $fileName;
        //     }
        // }

        // try {
            // Create the scholarship application
            ScholarshipApplication::create([
                'name' => $request->name,
                'gender' => $request->gender,
                'institution' => $request->institution,
                'registration_no' => $request->registration_no,
                'course_of_study' => $request->course_of_study,
                'duration' => $request->duration,
                'level' => $request->level,
                'year_of_admission' => $request->year_of_admission,
                'date_of_birth' => $request->date_of_birth,
                'marital_status' => $request->marital_status,
                'permanent_address' => $request->permanent_address,
                'bank_name' => $request->bank_name,
                'account_number' => $request->account_number,
                'gsm_number' => $request->gsm_number,
                'email' => $request->email,
                'local_government' => $request->local_government,
                'ward' => $request->ward,
                'admission_letter' => $request->admission_letter,
                'last_semester_result' => $request->last_semester_result,
                'registration_receipt' => $request->registration_receipt,
                'indigene_letter' => $request->indigene_letter,
                // 'ssce' => $request->ssce,
                'passport_photo' => $request->passport_photo
            ]);
            
            return redirect()->back()->with('success', 'Application submitted successfully! An email will be sent to you accordingly.');

        // } catch (\Exception $e) {
        //     return redirect()->back()
        //                    ->with('error', 'Error submitting application. Please try again.')
        //                    ->withInput();
        // }
    }

    public function index()
    {
        $applications = ScholarshipApplication::latest()->paginate(10);
        return view('admin.applications.index', compact('applications'));
    }

    public function export() 
    {
        // return (new ApplicationsExport)->download('applications-'.date("D-M-Y-H-i-s").'.xlsx'); 
        return Excel::download(new ApplicationsExport, 'applications-'.date("D-M-Y-H-i-s").'.xlsx');   
    }
}
