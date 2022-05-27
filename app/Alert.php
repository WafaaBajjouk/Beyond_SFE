<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{

    protected $fillable = [
        'text', 'client_name', 'client_id', 'titre'
    ];


}
