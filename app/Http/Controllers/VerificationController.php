<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
use App\Helpers\SmsHelper;

class VerificationController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('auth.verify', ['user' => $user]);
    }

    public function verify(Request $request)
    {
        $request->validate([
            'verification_code' => 'required|array|max:6',
            'verification_code.*' => 'required|string|max:1',
        ]);

        $user = Auth::user();
        $input_code = implode('', $request->input('verification_code')); // Convert array to string

        if ($user->verification_code === $input_code) {
            $user->is_verified = true;
            $user->verification_code = null; // Clear the verification code
            $user->email_verified_at = now(); // Set the email verification time
            $user->phone_verified_at = now(); // Set the phone verification time
            $user->save();

            return redirect()->route('home'); // Adjust this as needed
        }

        return back()->withErrors(['verification_code' => 'Invalid verification code.']);
    }

    public function resend(Request $request)
    {
        $user = Auth::user();
        $verification_code = (string) mt_rand(100000, 999999);

        if ($user->email) {
            Mail::to($user->email)->send(new VerificationCodeMail($verification_code));
        } else {
            SmsHelper::sendSms($user->phone, "Your verification code is: $verification_code");
        }

        $user->verification_code = $verification_code;
        $user->save();

        return back()->with('message', 'Verification code resent.');
    }
    }
