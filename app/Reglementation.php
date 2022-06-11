<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reglementation extends Model
{
    //
    protected $table= "reglementation";
    protected $fillable = [
        'id','status', 'idclient', 'clientname', 'text'
    ];
}
