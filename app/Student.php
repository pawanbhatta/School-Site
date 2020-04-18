<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['fname', 'lname', 'email', 'address', 'phone', 'student_profile', 'dob', 'class_id', 'joined_date'];
    protected $primaryKey = 'student_id'; 

    public function parents()
    {
        return $this->belongsTo(App\Parents::class);
    }

    public function classes()
    {
        return $this->belongsTo(App\Classes::class);
    }
}