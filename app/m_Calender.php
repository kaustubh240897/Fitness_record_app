<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Calender extends Model
{
    //
    public $timestamps = false;
    protected $primarykey='id';
    protected $fillable = ["id","calender_date","category"];
}
