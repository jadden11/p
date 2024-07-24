<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function register()
    {
        return view('form.register');
    }
    public function registeruser(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/login');
    }


    public function login()
    {
        return view('form.login');
    }
    public function loginuser(Request $request)
    {
        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
