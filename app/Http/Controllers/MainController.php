<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function about()
    {
        return view('main.about');
    }

    // public function scholarships()
    // {
    //     return view('main.scholarships');
    // }

    public function legislative()
    {
        return view('main.legislative');
    }

    public function news()
    {
        return view('main.news');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function empowerment()
    {
        return view('main.empowerment');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        // Handle contact form submission logic here
        // You can add email sending, database storage, etc.

        return back()->with('success', 'Message sent successfully!');
    }
}
