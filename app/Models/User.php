<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{
    protected $fillable = [
        'username', 
        'email', 
        'password',
        'pfp'
    ];
    use HasFactory;
    public function user_data(): HasOne
    {
        return $this->hasOne(UserData::class);
    }
    public function bootcamps(): BelongsToMany
    {
        return $this->BelongsToMany(Bootcamp::class);
    }
    public function events(): BelongsToMany
    {
        return $this->BelongsToMany(Event::class);
    }
    public function competitions(): BelongsToMany
    {
        return $this->BelongsToMany(Competition::class);
    }
}
