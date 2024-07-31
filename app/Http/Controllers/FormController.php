<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    /**
     * Handle the form submission.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        // Validate the incoming request data.
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'Emailmessage' => 'required|string',
            'media' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $data = $request->all();

        // Check if a file is included in the request.
        if ($request->hasFile('media')) {
            // Generate a unique file name 
            $fileName = time() . '_' . $request->file('media')->getClientOriginalName();
            // store file in sequre folder 
            $path = $request->file('media')->storeAs('uploads', $fileName, 'public');
            $data['media_path'] = $path;
        }
        // Send an email with the form data and attached file.
        Mail::send('emails.form', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject('Form Submission')
                ->attach(storage_path('app/public/' . $data['media_path']));
        });

        return back()->with('success', 'Form submitted successfully!');
    }
}
