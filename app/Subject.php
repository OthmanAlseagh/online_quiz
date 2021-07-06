<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function quizzes(){
    	return $this->hasMany('App\Quiz');
    }
    public function levels(){
    	return $this->belongsToMany('App\Level','levels_subjects','subject_id','level_id');
    }
}
