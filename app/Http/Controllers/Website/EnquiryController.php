<?php

namespace App\Http\Controllers\Website;

use Exception;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Models\VolunteerForm;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function sendEnquiry(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^[0-9+\-\s]+$/'],
            'age' => 'nullable|string',
            'gender' => 'nullable|string',
            'education' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        $data = $request->only(['name', 'email', 'phone', 'age', 'gender', 'education', 'message']);

        try {
            Mail::to('sibinworks652@gmail.com')->send(new ContactFormMail($data));
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (Exception $e) {
            return back()->with('error', 'Failed to send your message. Please try again later.')
                         ->with('debug',$e->getMessage());
        }
    }
    public function volunteerStore(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'phone'    => 'required|string|max:20',
            'email'    => 'required|email',
            'age'      => 'nullable|integer|min:18',
            'education'=> 'nullable|string|max:255',
            'gender'   => 'nullable|in:male,female,other',
            'message'  => 'nullable|string',
        ]);

        VolunteerForm::create($data);
        return back()->with('success', 'Your submission has been received. Thank you!');
    }
}
