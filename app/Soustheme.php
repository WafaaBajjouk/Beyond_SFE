<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soustheme extends Model
{
    //
    protected $table= "sousthemes";
    protected $fillable = [
        'titre'
    ];

    public function theme(){
    	return $this->belongsTo('App\Theme');

    }
}
