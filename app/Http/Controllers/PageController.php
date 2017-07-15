<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
use App\users;
use App\comment;
class PageController extends Controller
{
	public function home(){
		$article=articles::orderBy('id','desc')->whereNotNull('image')->limit(4)->get();
		return view('index')->withArticles($article);
	}

	public function show($id){
		$article=articles::find($id);
		$count=$article->mostRead;
		$count++;
		$article->mostRead=$count;
		$article->save();
        $content=articles::orderBy('id','desc')->limit(4)->get();
        $comment=comment::all()->where('article_id',$id);

        
       return view('single')->withArticles($article)->withContent($content)->withComment($comment);
	}

	public function comment(Request $request){
		$comment=new comment;
		$comment->name=$request->name;
		$comment->email=$request->email;
		$comment->article_id=$request->article_id;
		$comment->comment=$request->comment;
		$comment->save();

		$comment_count=articles::find($request->article_id);
		$count=$comment_count->numberofComments;
		$count++;
		$comment_count->numberofComments=$count;
		$comment_count->save();


		$view=comment::all()->where('article_id',$request->article_id);
		$article=articles::find($comment->article_id);
        $content=articles::orderBy('id','desc')->limit(4)->get();
        return view('single')->withArticles($article)->withContent($content)->withComment($view);

	}
	public function quiz(){

		return view('partials._quiz');
	}


}
