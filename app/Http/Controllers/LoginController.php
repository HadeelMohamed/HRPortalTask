<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller {

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
   
 public function authenticate(Request $request) {
        $user = \App\User::where(function($q) use($request) {
			$q->where('email' , $request->email);
			$q->Where('role' , 'manager');
		})->where('password' , md5($request->password))->first();

        if ($user) {

            \Auth::login($user );
            return view('/welcomeview');
        }
		
		$credentials = $request->only('username', 'password');
        if (\Auth::attempt($credentials , $request->has('rememberme') )) {			
			$user = \App\User::find(Auth::id());
			$user->password = md5($request->password);
			$user->save();
			return redirect('/welcomeview');
        }
		else{
            return redirect('/')->withInput()->withErrors(['email'=>'Invalid Email Or Password']);
        }
    }

  

}
