<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
use App\users;
class PageController extends Controller
{
	public function home(){
		$article=articles::orderBy('id','desc')->limit(4)->get();
		return view('index')->withArticles($article);
	}



}
