<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{
    function create(Request $request)
    {
    	$request->validate([
    		'name'=>'required',
    		'email'=>'required|email|unique:users,email',
    		'password'=>'required|min:5|max:30',
    		'cpassword'=>'required|min:5|max:30|same:password',
    	]);
    	$user=new User();
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->password=\Hash::make($request->password);
    	$save=$user->save();

    	if ($save) {
    		return redirect()->back()->with('success','You are now successfully registerd');
    	}else{
    		return redirect()->back()->with('fail','Something went wrong, failed to registerd');
    	}
    }
    function check(Request $request)
    {
    	$request->validate([
    		'email'=>'required|email|exists:users,email',
    		'password'=>'required|min:5|max:30',
    	],[
    		'email.exists'=>'This email is not exists on user table',
    	]);
    	$creds= $request->only('email','password');
    	if (Auth::guard('web')->attempt($creds)) {
    		return redirect()->route('user.home');
    	}else{
    		return redirect()->route('user.login')->with('fail','Incorrect Credentials');
    	}
    }
    function logout()
    {
    	Auth::guard('web')->logout();
    	return redirect('/user/login');
    }
}
