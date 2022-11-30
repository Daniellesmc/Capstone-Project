<?php

namespace App\Models;

use App\Helpers\Identity;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Foundation\Auth\User as Authenticatables;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatables implements AuthenticatableContract, AuthorizableContract
{
    use HasApiTokens, SoftDeletes, Authorizable, HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role',
        'email_verified_at'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($value) {
            $value->id = Identity::createId();
        });
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
