<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    public $timestamps = false;
    

    protected $guarded = array();  

    protected $table = 'state';
}
