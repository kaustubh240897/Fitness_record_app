<?php

namespace App;
use App\t_Tour;
use App\m_Checkpoint;
use App\m_Collection;
use Illuminate\Database\Eloquent\Model;

class m_Tour extends Model
{
    //
     public function t_tours()
    {
        return $this->hasMany(t_Tour::class);
    }
      public function checkpoints()
    {
        return $this->hasMany(m_Checkpoint::class);
    }
     public function m__collections()
    {
        return $this->belongsTo(m_Collection::class);
    }
     protected $table = "m__tours";
     
}
