<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonement extends Model
{
    //

    protected $table="abonements";
    protected $fillable = [
        'payed', 'montant', 'date', 'id_client'
    ];


}
