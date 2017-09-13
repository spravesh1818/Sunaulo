<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info_file extends Model
{
    public function infographics(){
		return $this->belongsTo('App\infographic','infographic_id');
	}
}
