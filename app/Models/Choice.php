<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Choice extends Model
{
    public function questions(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
