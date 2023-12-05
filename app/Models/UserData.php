<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserData extends Model
{
    use HasFactory;
    public function users(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
    public function organizers(): BelongsTo
    {
        return $this->BelongsTo(Organizer::class);
    }

}
