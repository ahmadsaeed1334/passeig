<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
use App\Helpers\SmsHelper;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email_or_phone' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'profile_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:3072'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        if (filter_var($input['email_or_phone'], FILTER_VALIDATE_EMAIL)) {
            Validator::make($input, [
                'email_or_phone' => ['required', 'email', 'max:255', 'unique:users,email'],
            ])->validate();
            $email = $input['email_or_phone'];
            $phone = null;
        } else {
            Validator::make($input, [
                'email_or_phone' => ['required', 'string', 'max:255', 'unique:users,phone'],
            ])->validate();
            $phone = $input['email_or_phone'];
            $email = null;
        }

        $verification_code = (string) mt_rand(100000, 999999);

        $profilePhotoPath = null;
        if (isset($input['profile_photo']) && $input['profile_photo'] instanceof UploadedFile) {
            $profilePhotoPath = $input['profile_photo']->store('profile_photos', 'public');
        }

        if ($email) {
            Mail::to($email)->send(new VerificationCodeMail($verification_code));
        } else {
            SmsHelper::sendSms($phone, "Your verification code is: $verification_code");
        }

        $user = User::create([
            'name' => $input['name'],
            'email' => $email,
            'phone' => $phone,
            'password' => Hash::make($input['password']), // Ensure password is hashed
            'verification_code' => $verification_code,
            'is_verified' => false,
            'profile_photo_path' => $profilePhotoPath,
            'user_type' => 2,
        ]);

        Auth::login($user);

        return $user;
    }
}
