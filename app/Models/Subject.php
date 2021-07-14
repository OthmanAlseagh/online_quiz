<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    public function quizzes(): HasMany
    {
        return $this->hasMany(Quiz::class);
    }

    public function levels()
    {
        return $this->belongsToMany(Level::class, 'levels_subjects', 'subject_id', 'level_id');
    }
}
