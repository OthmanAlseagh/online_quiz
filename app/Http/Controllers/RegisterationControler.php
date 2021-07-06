 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
Use Sentinel;
use Activation;
use App\User;
use Mail;

class RegisterationControler extends Controller
{
    public function register(){

    	return view ('authentication.register');
    }
    
   /* public function  postregister(Request $request){

    	$user=Sentinel::register($request->all());
    	$activation=Activation::create($user);
    	$role=Sentinel::findRoleBySlug('student');
    	$role->users()->attach($user);
        $this->sendEmail($user,$activation->code);

    	return redirect('/');
    }

    private function sendEmail($user,$code){

        Mail::send('email.Activation',[
            'user'=>$user,
            'code'=>$code],
            function($message) use ($user)
            {
                 $message->to($user->email);
                 $message->subject("Hello $user->first_name, Activation your account.");
            });   
    }
    */
}







