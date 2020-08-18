<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = array ('nom', 'prenom', 'telephone', 'email', 'cni');
    public static $rules = array(   'nom'=>'required|min:2',
                                    'prenom'=>'required|min:3',
                                    'telephone'=>'required|min:9',
                                    'email'=>'required|min:10',
                                    'cni'=>'required|min:13',
                                );
    public function compte(){
        return $this->hasMany('App\Compte');
    }
}
