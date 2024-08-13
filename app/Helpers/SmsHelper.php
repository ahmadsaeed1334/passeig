<?php

namespace App\Helpers;

use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\GuzzleClient;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Support\Facades\Log;

class SmsHelper
{
    public static function sendSms($phoneNumber, $message)
    {
        $account_sid = env('TWILIO_SID');
        $auth_token = env('TWILIO_TOKEN');
        $twilio_number = env('TWILIO_FROM');

        // Log::info('Sending SMS with Twilio credentials:', [
        //     'sid' => $account_sid,
        //     'token' => $auth_token,
        //     'from' => $twilio_number
        // ]);

        if (!$account_sid || !$auth_token || !$twilio_number) {
            // Log::error('Twilio environment variables are not set properly.');
            throw new \Exception('Twilio environment variables are not set properly.');
        }

        try {
            $httpClient = new GuzzleClient(new GuzzleHttpClient());
            $client = new Client($account_sid, $auth_token, null, null, $httpClient);
            $client->messages->create(
                $phoneNumber,
                [
                    'from' => $twilio_number,
                    'body' => $message,
                ]
            );
            // Log::info('SMS sent successfully.');
        } catch (TwilioException $e) {
            // Log::error('Error sending SMS: ' . $e->getMessage());
            if (strpos($e->getMessage(), 'Invalid \'To\' Phone Number') !== false) {
                throw new \Exception('Invalid phone number. Please ensure you include the country code, e.g., +1234567890.');
            } else {
                throw new \Exception('Error sending SMS: ' . $e->getMessage());
            }
        }
    }
}
