<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Attendance extends Model
{
   
       protected $table = 'attendance';
 protected $fillable = [
        'user_id', 'attendance_status', 'time_from','time_to','date'
    ];
}
