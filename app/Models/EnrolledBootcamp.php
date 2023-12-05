<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EnrolledBootcamp extends Model
{
    use HasFactory;
    public function bootcamps(): BelongsTo
    {
        return $this->belongsTo(Bootcamp::class);
    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
