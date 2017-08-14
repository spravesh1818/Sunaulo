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
		$category=category::all()->where('title','!=','जिज्ञासा र खुल्दुली');
		$random=array();;
		foreach ($category as $cat) {
			array_push($random,$cat->title);
		}
		shuffle($random);
		$article=articles::all()->where('category','!=','जिज्ञासा र खुल्दुली');
		$articles=$article->sortByDesc('created_at');
		
		return view('index')->withArticles($articles)->withCategory($random[0])->withCategories($category);
	}

	public function show($id){
		$article=articles::find($id);
		$users=User::all()->where('name',$article->author);
		$author;
		foreach($users as $user)
			$author=$user;
		$count=$article->mostRead;
		$count++;
		$article->mostRead=$count;
		$article->save();
        $content=articles::orderBy('id','desc')->limit(4)->get();
        $comment=comment::where('article_id',$id)->orderBy('created_at','desc')->paginate(5);

        $categories=category::all();

        $articles=articles::all()->where('category','!=','जिज्ञासा र खुल्दुली');
		$articles=$articles->sortByDesc('created_at');
        
       return view('single')->withArticle($article)->withContent($content)->withComments($comment)->withCategories($categories)->withAuthor($author)->withArticles($articles);
	}

	public function allpost(){
		$categories=category::all();
		//print_r($categories[0]->title);
		$articles=articles::paginate(5);
		return view('allpost')->withArticles($articles)->withCategories($categories);
	}

	public function special(){
		$categories=category::all();
		//print_r($categories[0]->title);
		$articles=articles::where('category','जिज्ञासा र खुल्दुली')->simplePaginate(1);
		return view('special')->withArticles($articles)->withCategories($categories);
	}

	public function categorywise($id){
		$category=category::find($id);
		$categories=category::all();
		//print_r($categories[0]->title);
		$articles=articles::where('category',$category->title)->paginate(5);
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

	public function fetchcategories(){
		$articles=category::all()->toJson();
		return response()->json($articles);
	}

	public function fetchspecial(){
		$articles=articles::all()->where('category','जिज्ञासा र खुल्दुली')->toJson();
		return response()->json($articles);
	}

	public function loadComments($id){
		$comments=comment::all()->where('article_id',$id)->toJson();
		$comments=$comments->sortByDesc($comments);
		return response()->json($comments);
	}

}
