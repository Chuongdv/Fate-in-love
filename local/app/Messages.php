<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    
    protected $table = "Messages";

    public function sourceContact()
    {
        return $this->hasOne(User::class, 'id', 'source');
    }

}
