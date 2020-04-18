<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = ['start_time', 'end_time'];
    protected $primaryKey = 'schedule_id';
}