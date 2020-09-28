<?php

namespace App;
use App\m_Collection;
use App\m_Users;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class t_Collection extends Model
{
    use SoftDeletes;
    public function m_collections()
    {
        return $this->belongsTo(m_Collection::class, 'm__collection_id');
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
