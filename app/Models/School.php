<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    // public $timestamps = false;


    public function student()
    {
        return $this->hasMany(Student::class);
    } 


}
