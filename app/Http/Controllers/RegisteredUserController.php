<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    protected $createNewUser;

    public function __construct(CreateNewUser $createNewUser)
    {
        $this->createNewUser = $createNewUser;
    }

    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function store(Request $request)
    // {
    //     $user = $this->createNewUser->create($request->all());

    //     Auth::login($user);

    //     return redirect()->route('verification.notice');
    // }

 
    public function store(Request $request)
    {
        try {
            $user = $this->createNewUser->create($request->all());
            Auth::login($user);
            return redirect()->route('custom.verification.notice');
        } catch (\Exception $e) {
            return back()->withErrors(['email_or_phone' => $e->getMessage()])->withInput();
        }
    }
}
