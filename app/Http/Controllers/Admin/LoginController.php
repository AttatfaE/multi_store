<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginAdminRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(loginAdminRequest $request)
    {

        $remember_me = $request->has('remember_me')?true:false;

        if (auth()->guard('admin')->attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ],
            $remember_me)){
            return redirect()->route('admin.dashboard');

        }

        return redirect()->back()->with('error','Invalid email or password');


    }
}
