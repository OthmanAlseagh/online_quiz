<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Level extends Model
{
    public function subjects(){
    	return $this->belongsToMany('App\Subject','levels_subjects','subject_id','level_id')->withTimestamps();
    }
    public function users(){
    	return $this->belongsToMany('App\User','levels_users','level_id','user_id')->withTimestamps();
    } 
}
