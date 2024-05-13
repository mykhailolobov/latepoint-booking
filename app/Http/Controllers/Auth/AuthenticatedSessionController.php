<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use App\Models\User;
use App\Models\UserVerificationToken;

class AuthenticatedSessionController extends Controller
{
    protected $providers = [
        'google', 'facebook', 'linkedin'
    ];
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if (Auth::check()) {
            dd("sdfa");
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }
    
    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login_act(LoginRequest $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // Check if user is admin
        $user = User::where('email', $request->email)->where('is_deleted', 0)->first();
        $credentials = $request->only('email', 'password');
        if ($user) {
            if($user->status){
                if (Auth::attempt($credentials)) {
                    if ($user->is_verified) {
                        return redirect()->route('dashboard');
                    } else if (!$user->is_verified) {
                        return back()->with('error',  "Your account is not verified !");
                    }
                } else {
                    return back()->with('error',  "Credentials do not match !");
                }
            }else{
                return back()->with('error',  "Your account is inactive !");
            }
        }else{
            return back()->with('error',  "Credentials do not match !");
        }

        if (!Auth::attempt($credentials)) {
            return back()->with('error',  __('frontend.Credentials_donot_match'));
        }

        return redirect()->route('login');
    }

}
