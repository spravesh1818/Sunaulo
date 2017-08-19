<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
Use App\category;
use App\User;
use App\comment;
use App\quizC;
use App\quiz;
use App\Tag;


class PageController extends Controller
{
	public function about(){
		$categories=category::all();
		$articles=articles::all();
		$articles=$articles->sortByDesc('created_at');
		return view('partials.about')->withArticles($articles)->withCategories($categories);
	}
	public function home(){
		$category=category::all()->where('title','!=','जिज्ञासा र खुल्दुली');
		$categories=category::all();
		$id=array();
		foreach ($category as $category) {
			$id[0]=$category->id;
		}
		$articles=articles::all();
		$articles=$articles->sortByDesc('created_at');
		
		return view('index')->withArticles($articles)->withCategories($categories);
	}

	public function show($id){
		$article=articles::find($id);
		$count=$article->mostRead;
		$count++;
		$article->mostRead=$count;
		$article->save();
        $content=articles::orderBy('id','desc')->limit(4)->get();
        $comment=comment::where('article_id',$id)->orderBy('created_at','desc')->paginate(5);

        $categories=category::all();

        $articles=articles::all()->where('category','!=','जिज्ञासा र खुल्दुली');
		$articles=$articles->sortByDesc('created_at');
        
       return view('single')->withArticle($article)->withContent($content)->withComments($comment)->withCategories($categories)->withArticles($articles);
	}

	public function allpost(){
		$categories=category::all();
		//print_r($categories[0]->title);
		$articles=articles::paginate(5);
		return view('allpost')->withArticles($articles)->withCategories($categories);
	}

	public function special(){
		$categories=category::all()->where('title','जिज्ञासा र खुल्दुली');
		$nav=category::all();
		$id=array();
		foreach ($categories as $category) {
			$id[0]=$category->id;
		}
		$articles=articles::where('category_id',$id[0])->simplePaginate(1);
		return view('special')->withArticles($articles)->withCategories($nav);
	}

	public function categorywise($id){
		$categories=category::all();
		//print_r($categories[0]->title);
		$articles=articles::where('category_id',$id)->paginate(5);
		return view('allpost')->withArticles($articles)->withCategories($categories);
	}

	public function comment(Request $request){
		//validation
		$this->validate($request,array(
          'name'=>'required|max:255',
            'email'=>'required|max:255',
            'comment'=>'required',
            ));

		//create the comment 
		$comment=new comment;
		$comment->name=$request->name;
		$comment->email=$request->email;
		$comment->article_id=$request->article_id;
		$comment->comment=$request->comment;
		$comment->save();

		//increase the number of comments field in articles
		$comment_count=articles::find($request->article_id);
		$count=$comment_count->numberofComments;
		$count++;
		$comment_count->numberofComments=$count;
		$comment_count->save();
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

	public function solution(){
		$quizzes=quizC::orderBy('id','desc')->get();
		$quiz=$quizzes[0];
		$questionNums=unserialize($quiz->questions);
		$questions=[];
		foreach ($questionNums as $question)
		{
			$details=quiz::find($question);
			array_push($questions, $details);
		}
		return view('quizSolution')->withQuestions($questions);
	}


	

	public function fetchspecial(){
		$category=category::all()->where('title','जिज्ञासा र खुल्दुली');
		$id=array();
		foreach ($category as $category) {
			$id[0]=$category->id;
		}
		$articles=articles::all()->where('category_id',$id[0])->toJson();
		return response()->json($articles);
	}

	public function loadComments($id){
		$comments=comment::all()->where('article_id',$id)->toJson();
		$comments=$comments->sortByDesc($comments);
		return response()->json($comments);
	}

	public function search(Request $request){
		$category=category::all()->where('title','!=','जिज्ञासा र खुल्दुली');
		$categories=category::all();
		$id=array();
		foreach ($category as $category) {
			$id[0]=$category->id;
		}
		$articles=articles::all()->where('category_id',$id[0]);
		$keyword= $request->keyword;
		$tag=Tag::where('name','like','%'.$keyword.'%')->get();
		return view('search')->withCategories($categories)->withArticles($articles)->withTags($tag)->withQuery($keyword);
	}

	public function check(Request $request){
		$i=$request->totalItems+2;
		$j=2;
		$points=0;
		while($j<$i){
			$sel=(string)$j;
			$choice="choice".$sel;
			$answer="answer".$sel;
			echo $choice;
			if($request->$choice===$request->$answer){
				echo "correct";
				echo "<br>";
				$points++;
			}
			

			$j=$j+1;
		}
		echo $points;
		//return view('result')->withPoints($points);
	}


	public function sortMR(){
		$categories=category::all();
		//print_r($categories[0]->title);
		$articles=articles::orderBy('mostRead','desc')->paginate(5);
		return view('allpost')->withArticles($articles)->withCategories($categories);
	}

	public function sortNC()
	{
		$categories=category::all();
		//print_r($categories[0]->title);
		$articles=articles::orderBy('numberofComments','desc')->paginate(5);
		return view('allpost')->withArticles($articles)->withCategories($categories);
	}


}
