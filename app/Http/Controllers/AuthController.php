<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use PDO;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
        if (Auth::check()) {
            return redirect()->route('admin.brand.index');
        }

        return view('admin.auth.login');
    }

    public function post_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error($validator->messages()->all());
            return redirect()->route('login');
        }

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!Auth::attempt($data)) {
            Session::flash('error', 'Email or Password is wrong');
            Alert::toast('Email or Password is wrong', 'error');
            return redirect()->route('login')->withErrors('Email or Password is wrong');
        }
        return redirect()->route('admin.brand.index');
    }

    public function register()
    {
        return view('admin.auth.login');
        if (Auth::check()) {
            return redirect()->route('admin.brand.index');
        }

        return view('admin.auth.login');
    }

    public function post_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error($validator->messages()->all());
            return redirect()->route('login');
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
