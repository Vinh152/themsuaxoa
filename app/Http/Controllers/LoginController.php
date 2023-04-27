<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class LoginController extends Controller
{
    public function singup(Request $request)
    {
        $password=Hash::make($request->password);
        $user=new User();
        $user->name=$request->txt;
        $user->email=$request->email;
        $user->password=$password;
        $user->save();
        return view("login");
    }

    public function singin(Request $request)
    {
        $credentials=$request->only('email', 'password');
        if(Auth::attempt($credentials))
        {

            return redirect()->intended('dashboard');
            return redirect()->intended('dashboard')
                        ->with('message', 'Signed in!');
        }
        else{
            return redirect('/');
        }

    }

    public function dashboard(){
        if(Auth::check())
        {
            return redirect()->route("products.index");
        }
        else{
           return redirect('/');
        }
    }
}
