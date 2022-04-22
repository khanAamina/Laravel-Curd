<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class LoginAuth extends Controller
{
    public function index(){
        return view('login');
    }

    public function userauth(Request $request){
        
        // dd($request->all());

        $username = $request->email;
        $password = $request->password;
        if(filter_var($username, FILTER_VALIDATE_EMAIL)) {
        //user sent their email
        Auth::attempt(['email' => $username, 'password' => $password]);
        } else {
            //they sent their username instead
            Auth::attempt(
                ['email' => $username, 'password' => $password]
            );
            $request->session()->regenerate();
            return redirect('/');
        }


        // if ( Auth::check() ) {
        //     //send them where they are goin 
        //     $request->session()->regenerate();
 
        //     return redirect()->intended('welcome');
        // }else{
        //     return back()->withErrors([
        //             'email' => 'The provided credentials do not match our records.',
        //         ]);
        // }        



        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
 
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->intended('welcome');
        // }
 
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
    }
}
