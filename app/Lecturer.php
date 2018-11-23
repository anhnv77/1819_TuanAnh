<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $table='lecturers';
    protected $fillable = [
        'user_id','lecturer_code','name','gender','birthday', 'phone_number'
    ];
}
