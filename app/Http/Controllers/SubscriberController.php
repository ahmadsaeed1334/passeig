<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('front.subscribers', compact('subscribers'), [
            'page_title' => 'subscribers',


        ]);
    }
}
