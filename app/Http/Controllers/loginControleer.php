<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Cartalyst \Sentinel\Checkpoints\ThrottlingException;
use Cartalyst \Sentinel\Checkpoints\NotActivatedException;
Use Sentinel;

class loginControleer extends Controller
{
    public function log(){

    	return view ('authentication.login');
    }
    public function postlog(Request $request )
    {  
               
        try {
             $rememberMe=false;
             if (isset($request->remmber_me)) 
                $rememberMe=true;
                 
             
            if ( Sentinel::authenticate($request->all(),$rememberMe)) {

            Sentinel::check();
            if(Sentinel::getUser()->roles()->first()->slug=='admin')
            return redirect('/admin');

            if(Sentinel::getUser()->roles()->first()->slug=='teacher')
            return redirect('/teacher');            
            
            if(Sentinel::getUser()->roles()->first()->slug=='student')
            return redirect('/student');            

    }
            # code...
        else{
                
                  return redirect()->back()->with(['error'=>'البريد الإلكتوني أو كلمة المرور غير صحيحين']);
        }
        
         
            
        } catch (ThrottlingException $e) {
            $delay=$e->getDelay();

            return redirect()->back()->with(['error'=>'لقد خطيت عددمرات المحاولة المسموح بها'. $delay.'تانيه']);
        }catch(NotActivatedException $e){

             return redirect()->back()->with(['error'=>'Yor are not Activated']);
        }}
        

    public function logout()
    {

    	Sentinel::logout();
    	return redirect('/login');
    } 
}
