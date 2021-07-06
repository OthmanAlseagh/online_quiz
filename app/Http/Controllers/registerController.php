<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Sentinel;
use App\Level;
use App\Subject;
use DB;

class registerController extends Controller
{
    

    public function register(){

    	$levels = DB::table('levels')->get();
    	return view ('authentication.register',compact('levels'));
    }
    public function postregister(Request $request){
		
    	
        $this->validate($request,[
            'password'=>'min:8',
            'name'=>'min:10'
            ],
            [
            'password.min'=>'كلمة المرور قصيرة <8',
            'name.min'=>'أدخل اسمك الرباعي '
            ]);
        
        $user=Sentinel::register($request->all());
        $role=Sentinel::findRoleBySlug('student');
        $role->users()->attach($user);
        
        $level=Level::find($request->level);
        $level->users()->attach($user);
    	return redirect ('/home');



    	 }
         public function addTeatcher(Request $request)
   {
       $levels = DB::table('levels')->get();
       $subjects=DB::table('subjects')->get();
       return view('pages.addTeatcher',compact('levels','subjects'));

   }
     public function postaddTeatcher(Request $request){
        
       $user=Sentinel::registerAndActivate($request->all());
        $role=Sentinel::findRoleBySlug('teacher');
        $role->users()->attach($user);

        

        $level=Level::find($request->level);
        $level->users()->attach($user);

         $subject=Subject::find($request->subject);
        $subject->levels()->attach($level);
        return redirect ('/tetcher');
        

        


         }

    public function addSudent(Request $request)
    
         {
                   $levels = DB::table('levels')->get();
                   return view('pages.addSudent',compact('levels'));

               }
    public function postaddSudent(Request $request){
        
       $user=Sentinel::registerAndActivate($request->all());
        $role=Sentinel::findRoleBySlug('student');
        $role->users()->attach($user);

        

        $level=Level::find($request->level);
        $level->users()->attach($user);
        return redirect ('/users');

        


         }

}
