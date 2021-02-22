<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;
use App\Models\User;
use Validator;
use App\Http\Requests;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
    	// dd($request);
        $req = $request->all();
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        $validator = Validator::make($req, $rules);

        if ($validator->fails()) {
            $request->session()->flash('warning', $validator->errors()->first());
            return redirect()->back();
        }

        $user = User::where('username', $req['username'])->first();

        if (!$user) {
            $request->session()->flash('warning', 'User not found');
            return redirect()->back();
        }

        $check = Hash::check($req['password'], $user->password);

        if (! $check) {
            $request->session()->flash('warning', 'Password not matched');
            return redirect()->back();
        }

        Auth::login($user);

        $request->session()->flash('success', 'Welcome to dashboard');

        return redirect('admin');
        
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
            // dd($validator->errors()->first());
            $request->session()->flash('warning', $validator->errors()->first());
            return redirect()->back();
        }

        $user = User::where('username',$req['username'])->first();

        if ($user != null) {
            $request->session()->flash('warning', 'user sudah ada');
            return redirect()->back();
        }
            
        $data = [
            'username' => $req['username'],
            'password' => bcrypt($req['password']),
        ];

        try {
            $user = User::create($data);            
        } catch (Exception $e) {
            dd($e->getMessages());
            $request->session()->flash('warning', $e->getMessages());
            return redirect()->back();
        }

        Auth::login($user);

        return redirect('admin/dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
