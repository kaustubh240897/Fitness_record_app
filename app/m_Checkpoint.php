<?php

namespace App;
use App\m_Tour;
use App\m_Collection;
use Illuminate\Database\Eloquent\Model;

class m_Checkpoint extends Model
{
    public function tours()
    {
        return $this->belongsTo(m_Tour::class, 'm__tour_id');
    }
     public function m_collections()
    {
        return $this->belongsTo(m_Collection::class, 'm__collection_id');
    }

}
