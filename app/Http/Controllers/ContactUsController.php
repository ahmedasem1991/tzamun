<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsNotification;
use App\Mail\ContactUsAcknowledgement;



class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'subject' => 'required|min:4',
            'phone' => 'required|min:9',
            'message' => 'nullable|string',
        ]);

        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }

        ContactUs::create($request->all());

        // Send email to admin
        Mail::to('info@tzamun.sa')->send(new ContactUsNotification($request->all()));

        // Send acknowledgment email to the customer
        Mail::to($request->email)->send(new ContactUsAcknowledgement($request->all()));

        return response()->json([
            'success' => true,
            'message' => __('messages.contact_success')
        ]);
    }
}
