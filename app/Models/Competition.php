<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Competition extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "type",
        "banner",
        "details",
        "start",
        "end",
        "price",
        "venue",
        "capacity",
        "organizer_id",
    ];

    public function organizers(): BelongsTo
    {
        return $this->belongsTo(Organizer::class);
    }
    public function users(): BelongsToMany
    {
        return $this->BelongsToMany(User::class);
    }
}
