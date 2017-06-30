<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;

class loginController extends Controller
{
	protected $redirectTo = '/usert';
    public function login(){
    	return view('auth.login');
    }

    public function verify(){
    	
    	if(!auth()->attempt(request(['email','password']))){
    		return back();
    	}

    	return redirect('/dashboard');
    }


    public function destroy(){

    	auth()->logout();
    	return redirect('login');
    }
}



   
