<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PDO;
use Symfony\Component\HttpFoundation\Session\Session;

class AuthController extends Controller
{
    public function index(){
        return view('backend/auth.login');
    }

    public function register(){
        return view('backend/auth.register');
    }

    public function customRegister(Request $request){
        $request->validate(
            [
                'firstname'     => 'required',
                'lastname'      => 'required',
                'username'      => 'required',
                'password'      => 'required | min:3',
                //'gender'      => 'required',
                'phonenumber'   => 'required',
                'email'         => 'required | email | unique:users',
                //'role_id'     => 'required',

            ]
         );
        $data = $request->all();
        Users::create([
            'user_id'       => null,
            'first_name'    => $data['firstname'],
            'last_name'     => $data['lastname'],
            'username'      => $data['username'],
            'password'      => Hash::make($data['password']),
            //'gender'      => $data['gender'],
            'gender'        => 'f',
            'phoneNumber'   => $data['phoneNumber'],
            'email'         => $data['email'],
            'role_id'       => 5,
            'createdAt'   => null,
            'updatedAt'   => null,
            //'type'        => 'Admin',
        ]);
        return  redirect()->route('login')->withSuccess('Your registraction completed.');
    }

    /*public function login(Request $request){
        //dd($request->all());
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        //return to_route('/dashboard');
        return redirect()->route('dashboard')->withSuccess('Login Successful!');
        //return redirect()->action([DashboardController::class, 'index']);
    }*/

    public function customLogin(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');

        //$roleId = User::select('select role_Id from users where username = ?',$credentials['username']);
       /* if(Auth::user()->role_id == 5){
            return redirect()->route('dashboard')->withSuccess('Login Successful!');
        }*/



        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }
        return redirect('/')->with('error','Login details are not valid!');



        /*if(Auth::attempt($credentials) && Auth::user()->role_id == 5){
            return redirect()->route('dashboard')->withSuccess('Login Successful!');
        }
        elseif (Auth::attempt($credentials) && Auth::user()->role_id == 6){
            return redirect()->route('studentDashboard')->withSuccess('Login Successful!');
        }
        elseif (Auth::attempt($credentials) && Auth::user()->role_id == 7){
            return redirect()->route('teacherDashboard')->withSuccess('Login Successful!');
        }

        return redirect('/')->with('error','Login details are not valid!');*/


        /*$user = Auth::guard('user')->user();
        if ($user->role_id === 5) {
            return redirect()->route('dashboard')->withSuccess('Login Successful!');
        }
        elseif($user->role_id === 6){
            return redirect()->route('studentDashboard')->withSuccess('Login Successful!');
        }
        elseif($user->role_id === 7){
            return redirect()->route('teacherDashboard')->withSuccess('Login Successful!');
        }
        else{
            return redirect('/')->with('error','Login details are not valid!');
        }*/

        /*$roleId = User::select('select role_Id from users where username = ?',$credentials['username']);
        if(Auth::attempt($credentials) && Auth::user()->role_id == 5){
            if ($roleId == '5'){
                return redirect()->route('dashboard')->withSuccess('Login Successful!');
            }
            elseif ($roleId == '6'){
                return redirect()->route('studentDashboard')->withSuccess('Login Successful!');
            }
            elseif ($roleId == '7'){
                return redirect()->route('teacherDashboard')->withSuccess('Login Successful!');
            }
            else{
                return redirect('/')->with('error','Login details are not valid!');
            }
        }*/


        /*$request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard')->withSuccess('Login Successful!');
        }
        return redirect('/')->with('error','Login details are not valid!');*/


        /*$request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $data = $request->all();
        $roleId = User::select('select role_Id from users where username = ?',$data['username']);

        //$role = DB::Users::->role;

        if ($roleId == '5'){
            return redirect()->route('dashboard')->withSuccess('Login Successful!');
        }
        elseif ($roleId == '6'){
            return redirect()->route('studentDashboard')->withSuccess('Login Successful!');
        }
        elseif ($roleId == '7'){
            return redirect()->route('teacherDashboard')->withSuccess('Login Successful!');
        }
        return redirect('/')->with('error','Login details are not valid!');*/

    }
}
