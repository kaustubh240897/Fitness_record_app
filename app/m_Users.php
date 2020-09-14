<?php

namespace App;
use App\t_Steps;
use Illuminate\Database\Eloquent\Model;

class m_Users extends Model
{
    //
   

    public function t_steps()
    {
        return $this->hasMany(t_Steps::class);
    }
    protected $table = "m__users";
    protected $fillable = [
        'serial_number',
        'stride',
        'step_goal_per_day',
        'step_goals_per_month',
        'tour_level',
        'motion_app',
        'motion_web',


    ];

}
