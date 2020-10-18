<?php

namespace App;
use App\m_Tour;
use app\m_Collection;
use Illuminate\Database\Eloquent\Model;

class m_Checkpoint extends Model
{
    public function tours()
    {
        return $this->belongsTo(m_Tour::class);
    }
     public function m_collections()
    {
        return $this->belongsTo(m_Collection::class);
    }

}
