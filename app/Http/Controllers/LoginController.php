<?php

namespace App\Http\Controllers;

use App\Models\Registration;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if(AUTH::guest()){
            return view('login');
        } else {
            return redirect(route('welcome'));
        }
    }


    public function authenticate(Request $request)
{

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => 'required'
    ]);

    $guard = Auth::guard(); // Get the default guard, typically 'web'

    if ($guard->attempt($credentials)) {
        return redirect(route('welcome'));
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.'
    ]);
}

}
