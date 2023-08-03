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
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.brand.index');
            }
            return redirect()->route('admin.member.index');
        }
        return view('admin.auth.login');
    }

    public function admin_page()
    {
        $active = 'admin';
        $data = User::all();
        return view('admin.page.member.index', compact('active', 'data'));
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
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin.brand.index');
        }
        return redirect()->route('admin.member.index');
    }

    // public function register()
    // {
    //     if (Auth::check()) {
    //         return redirect()->route('admin.brand.index');
    //     }

    //     return view('admin.auth.login');
    // }

    public function post_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            Alert::error($validator->messages()->all());
            return back()->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 'admin';
        $user->password = Hash::make($request->password);
        $user->save();

        Alert::toast('Successfully Add Member', 'success');
        return back();
    }

    public function update(Request $request)
    {
        if (!empty($request->password)) {
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'name' => 'required',
                'role' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8'
            ]);

            if ($validator->fails()) {
                Alert::error($validator->messages()->all());
                return back()->withInput();
            }

            $user = User::findOrFail($request->id);
            $user->name = $request->name;
            $user->role = $request->role;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
        } else {
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'name' => 'required',
                'role' => 'required',
                'email' => 'required|email',
            ]);

            if ($validator->fails()) {
                Alert::error($validator->messages()->all());
                return back()->withInput();
            }

            $user = User::findOrFail($request->id);
            $user->name = $request->name;
            $user->role = $request->role;
            $user->email = $request->email;
        }

        $user->save();

        Alert::toast('Successfully Update Member', 'success');
        return back();
    }

    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error($validator->messages()->all());
            return back();
        }

        $user = User::findOrFail($request->id);
        $user->delete();

        Alert::toast('Successfully Delete Member', 'success');
        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
