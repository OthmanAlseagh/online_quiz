<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Senteinal;
use Activation;
use App\User ;

class activationController extends Controller
{
   public function activate($email $activationCode)
   {
          $user=User::whereEmail($email)->first();
          $sentinalUser=findById($user->id);

          if(Activation::complete($sentinalUser,$activationCode))
          {

          	return redirect('/login');
          }

   }else
}
