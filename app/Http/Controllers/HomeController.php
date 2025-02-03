<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipApplication;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $scholarshipApplications = ScholarshipApplication::latest()->paginate(10);

        return view('dashboard', compact('scholarshipApplications'));
    }
}
