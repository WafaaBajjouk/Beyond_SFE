<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class textReg extends Model
{

    protected $fillable = [
        'id',
        'soustheme',

        'theme',
        'libellee',
        'nbo',
        'datedecreation',
        'texte',
        'fichedaudit',
        'fichedelecture',
      ];
}
