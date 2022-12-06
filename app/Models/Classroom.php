<?php

namespace App\Models;

use App\Helpers\Identity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'name',
        'teacher_id',
    ];

    protected $table = 'classrooms';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($value) {
            $value->id = Identity::createId();
        });
    }
}
