<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
class AdminController extends Controller
{
     function check(Request $request)
    {
    	$request->validate([
    		'email'=>'required|email|exists:admins,email',
    		'password'=>'required|min:5|max:30',
    	],[
    		'email.exists'=>'This email is not exists on admin table',
    	]);
    	$creds= $request->only('email','password');
    	if (Auth::guard('admin')->attempt($creds)) {
    		return redirect()->route('admin.home');
    	}else{
    		return redirect()->route('admin.login')->with('fail','Incorrect Credentials');
    	}
    }
    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}
