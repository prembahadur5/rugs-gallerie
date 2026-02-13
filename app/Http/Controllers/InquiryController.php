<?php

// app/Http/Controllers/InquiryController.php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;   
use App\Models\Inquiry;
use App\Mail\InquiryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function create()
    {
        return view('inquiry.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'phone'   => 'nullable|string',
            'message' => 'required|string',
        ]);

        // Save to database
        $inquiry = Inquiry::create($data);

        // Send email to admin
        Mail::to('admin@example.com')->send(new InquiryMail($inquiry));

        return back()->with('success', 'Inquiry submitted successfully!');
    }
	public function show($id)
	{
		$inquiry = Inquiry::findOrFail($id);
		return view('frontend.inquiry', compact('inquiry'));
	}
}
