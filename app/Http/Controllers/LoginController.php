<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Pengguna;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            return view('layout/login');
        }
    }

    public function actionlogin(Request $request)
    {
       $email=$request->input('email');
       $password=$request->input('password');
       $user=Pengguna::where('email',$email)
                        ->where('password',$password)
                        ->first();
        if($user){
            Auth::login($user);
            return redirect('dashboard');
        }else{
            Session::flash('error','Email Atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
