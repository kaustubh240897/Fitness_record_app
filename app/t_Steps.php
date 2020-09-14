<?php

namespace App;
use App\m_Users;
use Illuminate\Database\Eloquent\Model;

class t_Steps extends Model
{

    public function m_users()
    {
        return $this->belongsTo(m_Users::class);
    }
    //
    protected $table = "t__steps";
    protected $fillable = [
        'step_actual_datetime',
        'step_calc_datetime',
        'steps',


    ];
}
