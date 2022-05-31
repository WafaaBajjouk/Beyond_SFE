<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    //
    protected $table= "themes";
    protected $fillable = [
        'id','titre','soustheme'
    ];

    public function sousthemes(){
        // theme has multiple sousthemes

        // Eloquent will automatically determine the proper foreign key column on the soustheme Model.
            return $this->hasMany('App\Soustheme');
    }
}
