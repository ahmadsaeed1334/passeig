<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class SubscriptionController extends Controller
{
    
     public function store(Request $request)
    {
        // Define the validation rules
        $rules = [
            'email' => 'required|email|unique:subscribers,email'
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if the validation fails
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first('email')
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Thank you for subscribing!'
        ]);
        // Store the email in the database
        \DB::table('subscribers')->insert([
            'email' => $request->input('email'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Return success response
        return response()->json([
            'message' => 'Thank you for subscribing!'
        ]);
    }
}
