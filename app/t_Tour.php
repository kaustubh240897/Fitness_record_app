<?php

namespace App;
use App\m_Tour;
use App\m_Users;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class t_Tour extends Model
{
     use SoftDeletes;
     public function m_tours()
    {
        return $this->belongsTo(m_Tour::class,'m__tours_id');
    }
     public function m_users()
    {
        return $this->belongsTo(m_Users::class);
    }
    //
    
    //
    protected $table = "t__tours";
}
