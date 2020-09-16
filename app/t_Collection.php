<?php

namespace App;
use App\m_Collection;
use App\m_Users;
use Illuminate\Database\Eloquent\Model;

class t_Collection extends Model
{
    //
    public function m_collections()
    {
        return $this->belongsTo(m_Collection::class);
    }
    public function m_users()
    {
        return $this->belongsTo(m_Users::class);
    }

    protected $table = "t__collections";
    protected $fillable = [
        'm__users_id',
        'new_display_flag',
       


    ];
}
