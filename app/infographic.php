<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infographic extends Model
{
    public function info_file(){
		return $this->hasMany('App\info_file');
	}
}
