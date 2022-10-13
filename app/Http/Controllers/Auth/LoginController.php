<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('log_out');
    }

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $message = [
            'required' => ':attribute silahkan di isi dahulu',
            'min' => ':attribute kurang dari 5 karakter'
        ];

        $request->validate([
            'username'=> 'required',
            'password'=> 'required|min:5'
        ],$message);

        $credentials = $request->only('username','password');

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }else{
            return back()->with('pesan','user dan password tidak ditemukan');
        }

    }

    public function log_out(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }


    //
}
