<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery_file extends Model
{
    public function gallery(){
		return $this->belongsTo('App\gallery','gallery_id');
	}
}
