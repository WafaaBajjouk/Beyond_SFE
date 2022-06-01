<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{

    protected $table="alerts";
    protected $fillable = [
        'text', 'client_name', 'client_id', 'titre'
    ];

    public function client(){
    	return $this->belongsTo('App\Client');

    }



}
