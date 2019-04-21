<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    //

    protected $table = 'Schools';

    public function user(){
    	return $this->hasMany('App\User','sid','id');
    }
}
