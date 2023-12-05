<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EnrolledCourse extends Model
{
    use HasFactory;
    public function courses(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
