<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(){
        $data = [
            'pageTitle' => 'Login',
        ];

        return view('auth.login', $data);
    }

    public function loginCheck(Request $r){
        if(Auth::attempt(['username' => $r->username, 'password' => $r->password])){
            $r->session()->regenerate();

            session()->put('username', Auth::user()->username);
            session()->put('name', Auth::user()->name);
            session()->put('role', Auth::user()->role);

            return redirect('/dashboard');
        }else{
            return redirect('/login')->with("error", $r->username);
        }
    }

    public function logout(Request $r){
        Auth::logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();

        return response()->json([
            'status' => true,
        ]);
    }
}
