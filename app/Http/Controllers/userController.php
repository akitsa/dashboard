<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class userController extends Controller
{
    //
    public function authanticate(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            # code...
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('loginError',"login Failed");

    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'email' => 'required|email:dns',
                'password' => 'required',
            ]
            );

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
