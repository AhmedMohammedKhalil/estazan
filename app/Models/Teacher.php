<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Teacher extends Authenticatable
{

    protected $guard = 'teacher';

    protected $fillable = [
        'name', 'email','civil_number', 'password','image','phone'
    ];

    use HasFactory;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];
}
