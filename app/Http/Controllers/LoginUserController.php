<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Pengguna;

class LoginUserController extends Controller
{
    public function loginuser()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('layout/loginuser');
        }
    }

    public function actionlogin1(Request $request)
    {
       $username=$request->input('username');
       $password=$request->input('password');
       $user=Pengguna::where('username',$username)
                        ->where('password',$password)
                        ->first();
        if($user){
            Auth::login($user);
            return redirect('home');
        }else{
            Session::flash('error','Username Atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout1()
    {
        Auth::logout();
        return redirect('/');
    }
}
