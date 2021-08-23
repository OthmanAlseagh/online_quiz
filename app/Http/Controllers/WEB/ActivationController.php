<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use App\Models\User;

class ActivationController extends Controller
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
