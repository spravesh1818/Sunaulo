<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
Use App\category;
use App\User;
use App\comment;
use App\quizC;
use App\quiz;
class PageController extends Controller
{
	public function home(){
		$category=category::all();
		$random=array();;
		foreach ($category as $cat) {
			array_push($random,$cat->title);
		}
		shuffle($random);
		$article=articles::orderBy('id','desc')->whereNotNull('image')->limit(4)->get();
		return view('index')->withArticles($article)->withCategory($random[0])->withCategories($category);
	}

	public function show($id){
		$article=articles::find($id);
		$user=User::all()->where('name',$article->author);
		$author;
		foreach($user as $user)
			$author=$user;

		$count=$article->mostRead;
		$count++;
		$article->mostRead=$count;
		$article->save();
        $content=articles::orderBy('id','desc')->limit(4)->get();
        $comment=comment::all()->where('article_id',$id);
        $categories=category::all();

        
       return view('single')->withArticles($article)->withContent($content)->withComment($comment)->withCategories($categories)->withAuthor($author);
	}

	public function allpost(){
		$categories=category::all();
		//print_r($categories[0]->title);
		$articles=articles::paginate(5);
		return view('allpost')->withArticles($articles)->withCategories($categories);
	}

	public function categorywise($id){
		$category=category::find($id);
		$categories=category::all();
		//print_r($categories[0]->title);
		$articles=articles::where('category',$category->title)->paginate(5);
		return view('allpost')->withArticles($articles)->withCategories($categories);
	}

	public function comment(Request $request){
		$comment=new comment;
		$comment->name=$request->name;
		$comment->email=$request->email;
		$comment->article_id=$request->article_id;
		$comment->comment=$request->comment;
		$comment->save();

		$categories=category::all();

		$comment_count=articles::find($request->article_id);
		$count=$comment_count->numberofComments;
		$count++;
		$comment_count->numberofComments=$count;
		$comment_count->save();


		$view=comment::all()->where('article_id',$request->article_id);
		$article=articles::find($comment->article_id);
        $content=articles::orderBy('id','desc')->limit(4)->get();
        return view('single')->withArticles($article)->withContent($content)->withComment($view)->withCategories($categories);

	}
	public function quiz(){
		$quizzes=quizC::orderBy('id','desc')->get();
		$quiz=$quizzes[0];
		$questionNums=unserialize($quiz->questions);
		$questions=[];
		foreach ($questionNums as $question)
		{
			$details=quiz::find($question);
			array_push($questions, $details);
		}
		return view('partials._quiz')->withQuestions($questions);
	}


}
