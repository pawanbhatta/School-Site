<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = ['fname', 'lname', 'position', 'email', 'address', 'phone', 'teacher_profile', 'class_id', 'joined_date'];
    protected $primaryKey = 'teacher_id';

    public function classes()
    {
        return $this->belongsTo(App\Classes::class);
    }
}