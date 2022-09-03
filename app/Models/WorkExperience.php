<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $table = 'work_experience';
    use HasFactory;

    // We have post and it belongsTo a user

    public function user(){
        return $this->belongsTo(User::class);
    }
}