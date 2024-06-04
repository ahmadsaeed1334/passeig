<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class EmailVerificationController extends Controller
{
    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'verification_code' => 'required|numeric',
        ]);

        $user = User::where('email', $request->email)
                    ->where('verification_code', $request->verification_code)
                    ->first();

        if ($user) {
            $user->email_verified_at = now();
            $user->save();
            return redirect('/')->with('message', 'Email verified successfully.');
        } else {
            return redirect()->back()->withErrors(['verification_code' => 'Invalid verification code or email.']);
        }
    }
}
