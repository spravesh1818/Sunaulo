<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questionReply extends Model
{
    public function questionrel(){
		return $this->belongsTo('App\question','question_id');
	}
}
