<?php

namespace App;
use App\t_Collection;
use App\m_Tour;
use App\m_Checkpoint;
use Illuminate\Database\Eloquent\Model;

class m_Collection extends Model
{
    //
    public function t_collections()
    {
        return $this->hasMany(t_Collection::class);
    }
     public function m__tours()
    {
        return $this->hasMany(m_Tour::class);
    }
     public function m__checkpoints()
    {
        return $this->hasMany(m_Checkpoint::class);
    }
    protected $table = "m__collections";
    protected $fillable = [
    
        'collection_category',
        'collection_title',
        'path',
        'filename',
       


    ];
}
