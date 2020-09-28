<?php

namespace App;
use App\t_Steps;
use App\t_Collection;
use App\t_Tour;
use App\User;
use Illuminate\Database\Eloquent\Model;

class m_Users extends Model
{
    //

      public function user()
    {
        return $this->belongsTo(User::class);
    }
   

    public function t_steps()
    {
        return $this->hasMany(t_Steps::class);
    }
    public function t_collections()
    {
        return $this->hasMany(t_Collection::class);
    }
    public function t_logs()
    {
        return $this->hasMany(t_Log::class);
    }
    public function t_tours()
    {
        return $this->hasMany(t_Tour::class);
    }

    protected $table = "m__users";
    protected $primarykey=['id'];
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
