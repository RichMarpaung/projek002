<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    protected $fillable = [
        'name',
        'email',
        'phone',
        'role_id',
        'password',
    ];
}
