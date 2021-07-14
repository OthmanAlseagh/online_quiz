<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $fillable = [
        'name',
        'email'
    ];

    public function levels()
    {
        return $this->belongsToMany(Level::class, 'levels_users', 'user_id', 'level_id')->withTimestamps();
    }

    public function answer(): HasOne
    {
        return $this->hasOne(Answer::class);
    }
}
