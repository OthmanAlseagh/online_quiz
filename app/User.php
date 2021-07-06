<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
	protected $fillable=['name','email'];
    public function levels(){
        return $this->belongsToMany('App\Level','levels_users','user_id','level_id')->withTimestamps();
    }
    public function answers(){
        return $this->hasOne('App\Answer');
    }
}
