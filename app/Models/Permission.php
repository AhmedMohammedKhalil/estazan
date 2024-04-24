<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'reason','teacher_id','replyed_at','status'
    ];

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
}
