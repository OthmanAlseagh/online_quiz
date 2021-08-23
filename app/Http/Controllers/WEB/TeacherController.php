<?php
namespace App\Http\Controllers\WEB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Choice;
use App\Models\Subject;
use DB;


class TeacherController extends Controller
{
   
    public function teacher(){
      $arbic=Subject::where('id',3)->first();
      $quiz=DB::table('quizzes')->get();
      $question=DB::table('questions')->get();
      $choice=DB::table('choices')->get();
      return view ('pages.teacher',compact('quiz','question','choice','arbic'));

    }
    public function teacherquraan(){
      $quraan=Subject::where('id',1)->first();
      $quiz=DB::table('quizzes')->get();
      $question=DB::table('questions')->get();
      $choice=DB::table('choices')->get();
      return view ('pages.teacherquraan',compact('quiz','question','choice','quraan'));

    }

   public function addquision(Request $request){
       
     

      $qu=new Question;
      $qu->question=$request->question;
      $qu->correct_choice=$request->correct_choice;
      $qu->quizzes()->associate($request->quiz);
      $qu->save();

         $choice=new Choice;
         $choice->choice1=$request->choice1;
         $choice->choice2=$request->choice2;
         $choice->questions_id=$qu->id;
         $choice->save();
       return back();
 }
 
 public function addquiz(Request $request){

   
      $quiz=new Quiz;
      $quiz->subjects()->associate($request->sub_id);
      $quiz->quiz_name=$request->quiz_name;
      $quiz->start_time=$request->start_time;
      $quiz->end_time=$request->end_time;
      $quiz->save();
    
  return back();

}
public function markteacherA(){
            $users = DB::table('users')->get();
            $role_users=DB::table('role_users')->get();
            $role=DB::table('roles')->get();
            $activate=DB::table('activations')->get();
            $levels_users=DB::table('levels_users')->get();
            $levels_subjects=DB::table('levels_subjects')->get();
            $subjects=DB::table('subjects')->where('id',3)->get();
            
          
  return view ('pages.markteacherA',compact('users','role_users','activate','role','levels_users','levels_subjects','subjects'));
}
public function delete(Question $id_qui){

  $id_qui->delete();
  return back();}
}