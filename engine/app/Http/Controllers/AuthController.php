<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('LoginRegister.index');
    }
    public function showRegisterForm()
    {
        return view('LoginRegister.register');
    }
    public function showForgotPasswordForm()
    {
        return view('authenticate.forgot-password');
    }

    public function register(Request $request)
    {
        // Validasi dll
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('LoginRegister.index.form');
    }
    public function login(Request $request)
{
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->route('home'); // Redirect to the dashboard upon successful login
    } else {
        return back(); // Redirect back to the login page if login fails
    }
}


    // public function sendResetLinkEmail(Request $request)
    // {
    //     $request->validate(['email' => 'required|email']);

    //     $status = Password::sendResetLink(
    //         $request->only('email')
    //     );

    //     return $status === Password::RESET_LINK_SENT
    //                 ? back()->with(['status' => __($status)])
    //                 : back()->withErrors(['email' => __($status)]);
    // }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('LoginRegister.index.form');
    }
}
