<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $fillable = ['number', 'num_of_sub', 'num_of_std'];
    protected $primaryKey = 'class_id';

    public function teachers()
    {
        return $this->hasMany(App\Teacher::class);
    }

    public function students()
    {
        return $this->hasMany(App\Student::class);
    }
}