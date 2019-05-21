<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Attendance extends Model
{
   
       protected $table = 'attendance';
 protected $fillable = [
        'user_id', 'attendance_status', 'time_from','time_to','date'
    ];


    public function getemployee()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
