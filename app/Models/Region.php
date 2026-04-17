<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name', 'code', 'order'];

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function userProfiles()
    {
        return $this->hasMany(UserProfile::class);
    }
}
