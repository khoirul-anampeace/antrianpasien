<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //
    public function index()
    {
        return view('page.login');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            Session::flash('email', $request->email);
            return redirect('/dashboard');
        } else {
            return redirect('/sesi')->withErrors($infologin);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/sesi');
    }
}
