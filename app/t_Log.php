<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\m_Users;
class t_Log extends Model
{
    //
      public function m_users()
    {
        return $this->belongsTo(m_Users::class);
    }
    //
    protected $table = "t__logs";
    protected $fillable = [
        'access_datetime',
        
        


    ];

}
