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


    public function permeissions() {
        return $this->hasMany(Permission::class);
    }

    public function repliedpermissions() {
        return $this->permeissions()->where('status','!=','0');
    }

    public function newpermissions() {
        return $this->permeissions()->where('status','0');
    }

    public function complaints() {
        return $this->hasMany(Complaint::class);
    }

    public function repliedcomplaints() {
        return $this->complaints()->whereNotNull('reply');
    }

    public function newcomplaints() {
        return $this->complaints()->whereNull('reply');
    }

    public function announcements() {
        return $this->hasMany(Announcement::class);
    }
}
