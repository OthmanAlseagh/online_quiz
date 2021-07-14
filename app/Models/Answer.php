<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    public function questions(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
