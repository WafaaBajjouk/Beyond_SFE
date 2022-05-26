<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class textReg extends Model
{

    protected $fillable = [
        'Libellée',
        'Thème',
        'SousThème',
        'N°BO',
        'Texte',
        'Fichedaudit',
        'Fichedelecture',
      ];
}
