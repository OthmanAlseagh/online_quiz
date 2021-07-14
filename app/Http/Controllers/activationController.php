<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use App\User;

class activationController extends Controller
{
    public function activate(Request $request)
   {
          $user=User::whereEmail($request->email)->first();
          $sentinalUser=findById($user->id);

          if(Activation::complete($sentinalUser,$request->activationCode))
          {
          	return redirect('/login');
          }else{

          }
    }
}
