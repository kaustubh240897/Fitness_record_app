<?php

namespace App;
use App\m_Tour;
use Illuminate\Database\Eloquent\Model;

class m_Checkpoint extends Model
{
       public function tours()
    {
        return $this->belongsTo(m_Tour::class);
    }
}
