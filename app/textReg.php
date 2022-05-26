<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class textReg extends Model
{

    protected $fillable = [

        'theme',
        'sousTheme',
        'libellee',
        'datedecreation',
        'n°bo',
        'texte',
        'fichedaudit',
        'fichedelecture',
      ];
}
