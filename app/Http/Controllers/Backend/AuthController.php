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

    public function login(Request $request){
        //dd($request->all());
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        //return to_route('/dashboard');
        return redirect()->route('dashboard');
        //return redirect()->action([DashboardController::class, 'index']);
    }

}
