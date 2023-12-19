<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Organizer extends Model
{
    use HasFactory;
    public function user_data(): HasMany
    {
        return $this->hasMany(UserData::class);
    }
    public function bootcamps(): HasMany
    {
        return $this->hasMany(Bootcamp::class);
    }
    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
    public function competitions(): HasMany
    {
        return $this->hasMany(Competition::class);
    }
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
