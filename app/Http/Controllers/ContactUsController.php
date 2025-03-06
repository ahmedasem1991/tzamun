<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Validator;



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

        return response()->json([
            'success' => true,
            'message' => __('messages.contact_success')
        ]);
    }
}
