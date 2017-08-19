<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function articles(){
		return $this->belongsTo('App\articles','article_id');
	}
}
