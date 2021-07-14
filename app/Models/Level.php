<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Level extends Model
{
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'levels_subjects', 'subject_id', 'level_id')->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'levels_users', 'level_id', 'user_id')->withTimestamps();
    }
}
