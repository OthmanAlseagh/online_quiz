<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function questions(){
    	return $this->hasMany('App\Question','quizzes_id','id');
    }
    public function subjects(){
    	return $this->belongsTo('App\Subject');
    }
}
