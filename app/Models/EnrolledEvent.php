<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EnrolledEvent extends Model
{
    use HasFactory;
    public function events(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
