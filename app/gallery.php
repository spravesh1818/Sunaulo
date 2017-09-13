<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    public function gallery_file(){
		return $this->hasMany('App\gallery_file');
	}
}
