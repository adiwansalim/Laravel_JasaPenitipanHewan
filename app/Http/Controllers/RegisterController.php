<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class RegisterController extends Controller
{
    public function register()
    {
            return view('layout/register');

    }

    public function process(Request $request)
    {
      Pengguna::create($request->all());
        return redirect()->route('login');
    }
}
