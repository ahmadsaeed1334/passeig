<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class NewsletterController extends Controller
{
    /**
     * Store a newly created subscriber in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Please log in to subscribe to the newsletter.');
        }

        // Define validation rules
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Handle validation failure
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new subscriber
        Subscriber::create(['email' => $request->input('email')]);

        // Return a success response
        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}
