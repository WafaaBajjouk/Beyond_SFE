<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= "clients";
    protected $fillable = [
        'id','nom', 'email', 'password', 'entreprise', 'poste' ,'telephone', 'ville' , 'addresse'
    ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public function alerts(){
        // Client has multiple Alerts

        // Eloquent will automatically determine the proper foreign key column on the Alert Model.
            return $this->hasMany('App\Alert');
    }
}
