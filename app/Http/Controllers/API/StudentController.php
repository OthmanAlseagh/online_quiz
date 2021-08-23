<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Quiz;
use App\Subject;
use App\Answer;
use App\User;
use DB;
use Sentinel;

class StudentController extends Controller
{
    /*public function __construct(){
		$this->middleware('auth');*/
	
    public function student(){
        
    	return view ('pages.student');
    }
    
    public function results(){

    $user=Sentinel::getUser()->first();
    //$level=new User;
    //$level=levels()->where('user_id'=='$user')->get();

    $answer =Answer::get();

    $subject =Subject::get();      
    $quiz=Quiz::where('subjects_id',3)->get();
    $question=DB::table('questions')->get();
    $choice1=DB::table('choices')->get();
   


   	return view ('pages.StudentResulte',compact('user','subject','quiz','question','choice1','answer'));
   }
}
