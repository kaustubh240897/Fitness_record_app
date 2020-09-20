<?php

namespace App;
use App\m_Tour;
use App\m_Users;
use Illuminate\Database\Eloquent\Model;

class t_Tour extends Model
{
     public function m_tours()
    {
        return $this->belongsTo(m_Tour::class);
    }
     public function m_users()
    {
        return $this->belongsTo(m_Users::class);
    }
    //
    
    //
    protected $table = "t__tours";
}
