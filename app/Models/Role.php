<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'level'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function hasLevel(int $level): bool
    {
        return $this->level >= $level;
    }

    public function isSuperAdmin(): bool
    {
        return $this->slug === 'superadmin';
    }

    public function isAdmin(): bool
    {
        return $this->slug === 'admin' || $this->slug === 'superadmin';
    }

    public function isManager(): bool
    {
        return $this->slug === 'manager';
    }

    public function isClerk(): bool
    {
        return $this->slug === 'clerk';
    }
}
