<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;
use App\Models\User;
use Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $req = $request->all();
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        $validator = Validator::make($req, $rules);

        if ($validator->fails()) {
            return redirect('/admin/login')->with('errMsg', $validator->errors()->first());
        }

        $user = User::where('username', $req['username'])->first();
        if (!$user) {
            return redirect('/admin/login')->with('errMsg', 'Invalid Credentials. Username not found.');
        }

        $check = Hash::check($req['password'], $user->password);
        if (! $check) {
            return redirect('/admin/login')->with('errMsg', 'Invalid Credentials. Password not matched.');
        }

        Auth::login($user);
        return redirect('/admin/content');
        
    }

    public function register()
    {
    	return view('register');
    }

    public function postRegister(Request $request)
    {
    	$req = $request->all();
        $rules = [
            'username' => 'required',
            'password' => 'required|min:5|confirmed',
        ];

        $validator = Validator::make($req, $rules);
        if ($validator->fails()) {
            return redirect('/admin/register')->with('errMsg', $validator->errors()->first());
        }

        $user = User::where('username',$req['username'])->first();

        if ($user != null) {
            return redirect('/admin/register')->with('errMsg', 'Username already registered. Try another username.');
        }
            
        $data = [
            'username' => $req['username'],
            'password' => bcrypt($req['password']),
        ];

        try {
            $user = User::create($data);            
        } catch (Exception $e) {
            Log::debug("Registration failed::".$e->getMessages());
            return redirect('/admin/register')->with('errMsg', 'Registration failed. Please try again later...');
        }

        Auth::login($user);

        return redirect('admin/dashboard');
    }

    public function resetPassword()
    {
    	return view('forgot');
    }

    public function postResetPassword(Request $equest)
    {
    	dd($request);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
