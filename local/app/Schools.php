<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    //
    use Notifiable;
    protected $guarded = ['*'];

    protected $table = 'Schools';

    public function user(){
    	return $this->hasMany('App\User','sid','id');
    }

}
