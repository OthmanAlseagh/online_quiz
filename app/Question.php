<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable=['question','correct_choice','quizzes_id'];
    public function answers(){
    	return $this->hasOne('App\Answer','questions_id','id');
    }
	public function quizzes(){
    	return $this->belongsTo('App\Quiz');
    }
    public function choices(){
    	return $this->hasMany('App\Choice','questions_id');
    }
}
