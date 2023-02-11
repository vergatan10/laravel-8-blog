<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // $this->validate($request, [
        //     'email' => 'required|email:dns',
        //     'password' => 'required'
        // ]);
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
        dd('berhasil login');
        // $user = User::where('email', $request->email)->first();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // $request->session()->invalidate();
        request()->session()->invalidate();

        // $request->session()->regenerateToken();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
