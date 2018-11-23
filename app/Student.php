<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';
    protected $fillable = [
        'user_id','student_code','name','gender','birthday', 'class_name'
    ];
}
