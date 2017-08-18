<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    
	public function category(){
		return $this->belongsTo('App\category','category_id');
	}


	public function comments(){
		return $this->hasMany('App\comment','article_id');
	}

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }

    public function author(){
		return $this->belongsTo('App\User','author_id');
	}
}
