<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{
    // One to One
    public function phone(): HasOne
    {
        return $this->hasOne(Phone::class);
    }

    // One to Many
    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class);
    }
}
