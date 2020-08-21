<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    //
    protected $fillable = array ('numcompte', 'numagence', 'typecompte', 'clients_id','users_id');
    public static $rules = array(   'numcompte'=>'required|min:5',
                                    'numagence'=>'required|min:5',
                                    'typecompte'=>'required|min:5',
                                    'clients_id'=>'required|integer',
                                    'users_id'=>'required|bigInteger',
                                    
                                );
    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
