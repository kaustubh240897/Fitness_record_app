<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Collection extends Model
{
    //
    public function t_collections()
    {
        return $this->hasMany(t_Collection::class);
    }
    protected $table = "m__collections";
    protected $fillable = [
    
        'collection_category',
        'collection_title',
        'path',
        'filename',
       


    ];
}
