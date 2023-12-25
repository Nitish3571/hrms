<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\User;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
// use Brian2694\Toastr\Facades\Toastr;

class LoginController extends Controller
{
    // public function index(){
    //     return view('ashboard.dashboard');
    // }
    public function index(){
        return view('auth.login');
    }
    public function login(){
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        // echo "<pre>";
        // echo $request;
        $request->validate([
            'email'    => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->email;
        $password = $request->password;

        $dt         = Carbon::now();
        $todayDate  = $dt->toDayDateTimeString();

        if (Auth::attempt(['email'=> $username,'password'=> $password])) {
            /** get session */
            $user = Auth::User();
            Session::put('email', $user->email);
            Session::put('user_id', $user->user_id);
            Session::put('name', $user->name);

            toastr()->success('Login successful', 'Success');
            // return redirect()->intended('welcome');
            return redirect()->intended('dashboard');
        } else {
            toastr()->error('Login failed. Please check your credentials.', 'Error');
            return redirect('login');
        }
    }
    // public function authenticate(Request $request){
    //     // echo "<pre>";
    //     // $param = $request->all();
    //     // print_r($param);

    //     $user = DB::table('users')->where('email', $request->email)->first();

    //     if ($user && Hash::check($request->password, $user->password)) {
    //         echo "Success"; // Authentication successful
    //         Session::put('email', $user->email);
    //         Session::put('user_id', $user->user_id);
    //         Session::put('name', $user->name);

    //         toastr()->success('Login successful', 'Success');

    //     // Redirecting to the dashboard
    //     return view('dashboard.dashboard');
    // } else {
    //     // Authentication failed

    //     // Display error message using Toastr
    //     toastr()->error('Login failed. Please check your credentials.', 'Error');

    //     // Redirecting back to the login page
    //     return redirect()->route('login');
    // }

    }

