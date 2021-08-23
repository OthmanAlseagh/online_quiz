<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Answer;
use App\Question;
use App\Subject;
use App\Quiz;
use Sentinel;


class PagesController extends Controller
{
    public function home (){
    	return view ('lyout.top_menu');
    } 
    
   public function quraan(){
   	$quraan =Subject::where('id',1)->first();      
    $quraan_quiz=Quiz::where('subjects_id',1)->get();
    $quraan_question=DB::table('questions')->get();
    $quraan_choice1=DB::table('choices')->get();

    return view ('pages.student_pages.Quraan',compact('quraan','quraan_quiz','quraan_question','quraan_answer','quraan_choice1'));
   }

   public function islamic(){
    $islamic =Subject::where('id',2)->first();      
    $islamic_quiz=Quiz::where('subjects_id',2)->get();
    $islamic_question=DB::table('questions')->get();
    $islamic_choice1=DB::table('choices')->get();

    return view ('pages.student_pages.Islamic',compact('islamic','islamic_quiz','islamic_question','islamic_answer','islamic_choice1'));   }

   public function arabic(){

    $arabic =Subject::where('id',3)->first();      
    $arabic_quiz=Quiz::where('subjects_id',3)->get();
    $arabic_question=DB::table('questions')->get();
    $arabic_choice1=DB::table('choices')->get();

   


   	return view ('pages.student_pages.Arabic',compact('arabic','arabic_quiz','arabic_question','arabic_answer','arabic_choice1'));
   }
   public function postaddanswers(Request $request){
        
        $user=Sentinel::getUser();
         
        $answer=new Answer;
        $answer->users()->associate($user);
        $answer->questions()->associate($request->q_id);
        $answer->chosed_answer=$request->choices;
        $answer->mark=$request->correct;
        $answer->save();
                    return back();

        

   }

   public function english(){
   $english =Subject::where('id',4)->first();      
    $english_quiz=Quiz::where('subjects_id',4)->get();
    $english_question=DB::table('questions')->get();
    $english_choice1=DB::table('choices')->get();

    return view ('pages.student_pages.English',compact('english','english_quiz','english_question','english_answer','english_choice1'));
   }
   
   public function mathematics(){
   	$mathematics =Subject::where('id',5)->first();      
    $mathematics_quiz=Quiz::where('subjects_id',5)->get();
    $mathematics_question=DB::table('questions')->get();
    $mathematics_choice1=DB::table('choices')->get();

    return view ('pages.student_pages.Mathematics',compact('mathematics','mathematics_quiz','mathematics_question','mathematics_answer','mathematics_choice1'));
   }

   public function sciences(){
   	$sciences =Subject::where('id',6)->first();      
    $sciences_quiz=Quiz::where('subjects_id',6)->get();
    $sciences_question=DB::table('questions')->get();
    $sciences_choice1=DB::table('choices')->get();

    return view ('pages.student_pages.Sciences',compact('sciences','sciences_quiz','sciences_question','sciences_answer','sciences_choice1'));
   }

	public function social_studies(){
   	$social_studies =Subject::where('id',7)->first();      
    $social_studies_quiz=Quiz::where('subjects_id',7)->get();
    $social_studies_question=DB::table('questions')->get();
    $social_studies_choice1=DB::table('choices')->get();

    return view ('pages.student_pages.Social_Studies',compact('social_studies','social_studies_quiz','social_studies_question','social_studies_answer','social_studies_choice1'));
   }   
}
