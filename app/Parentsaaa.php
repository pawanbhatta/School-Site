<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';
    protected $fillable = ['fname', 'lname', 'email', 'address', 'phone', 'student_id'];
    protected $primaryKey = 'parent_id'; 

    public function students()
    {
        return $this->hasMany(App\Student::class);
    }
}