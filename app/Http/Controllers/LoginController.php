<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function login(Request $request) {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()
            ->back()
            ->withErrors('User or password is incorrect');
        }

        return redirect()->route('listAnimes');
    }
}
