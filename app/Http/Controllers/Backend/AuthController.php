<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class AuthController extends Controller
{
    public function index(){
        return view('backend/auth.login');
    }

    public function register(){
        return view('backend/auth.register');
    }

    public function customlogin(Request $request){
        //dd($request->all());
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('username','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('/dashboard')->withSuccess('Signed in');
        }
        //return to_route('/dashboard');
        return redirect("backend/auth.login")->with('error','Login details are not valid');
        return redirect()->route('dashboard')->withSuccess('Login Successful!');
        //return redirect()->action([DashboardController::class, 'index']);
    }
    public function dashboard()
    {
        if(Auth::check()){
            return view('/dashboard');
        }
        return redirect("backend/auth.login")->withSuccess('You are not allowed to access');
    }


}
