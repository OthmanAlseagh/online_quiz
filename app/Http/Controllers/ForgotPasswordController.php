<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ForgotPasswordController extends Controller
{
     public function forgotpassword()
    {
    	return view('authentication.forgot-passwor');
    }

   public function postForgotPassword(Request $request)
   {

   	return $request->email;
   }

}
