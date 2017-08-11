<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }
}
