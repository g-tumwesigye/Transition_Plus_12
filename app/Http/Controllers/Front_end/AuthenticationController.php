<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    //Login page
    public function index(){
        return view('auth.auth-login');
    }

    //Password Reset page
    public function forgot_password(){
        return view('auth.auth-forgot-password');
    }

    //Password set page
    public function set_password(){
        return view('auth.auth-reset');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        $isEmail = filter_var($credentials['username'], FILTER_VALIDATE_EMAIL);

        $field = $isEmail ? 'email' : 'telephone';

        $result = Auth::attempt([
            'email' => $credentials['username'],
            'password' => $credentials['password'],
        ]);
        if ($result) {
            $status = User::where('email',$request->username)->first();
            if ($status->is_active=='1') {
                $request->session()->regenerate();
                return redirect()->route('main.index');
            }else {
                return back()->withErrors([
                    'error' => 'User Locked',
                ])->onlyInput('email');
            }
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
