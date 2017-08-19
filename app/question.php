<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    public function reply(){
		return $this->hasMany('App\questionReply');
	}
}
