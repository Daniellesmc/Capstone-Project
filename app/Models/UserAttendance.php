<?php

namespace App\Models;

use App\Helpers\Identity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAttendance extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'student_id',
    ];

    protected $table = 'user_attendance';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($value) {
            $value->id = Identity::createId();
        });
    }
}
