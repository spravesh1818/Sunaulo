<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\articles;
use App\question;
use App\questionReply;

class questionController extends Controller
{
    public function show(){
        $articles=articles::all();
        $question=question::all();
        $category=category::all()->where('title','!=','जिज्ञासा र खुल्दुली');
        return view('askquestion')->withCategories($category)->withArticles($articles)->withQuestions($question);
    }

    public function fetchQuestions(){


    }

    public function insertQuestion(Request $request){
        $question=new question;
        $question->name=$request->name;
        $question->question=$request->question;
        $question->save();
        return response("Done");
    }


    public function openThread($id){
        
        $question=question::find($id);
        $replies=questionReply::where('question_id',$id)->paginate(10);
        $articles=articles::all();
        $category=category::all()->where('title','!=','जिज्ञासा र खुल्दुली');
        return view('thread')->withCategories($category)->withArticles($articles)->withQuestions($question)->withReplies($replies);
    }


    public function reply(Request $request){
        $reply=new questionReply;
        $reply->name=$request->name;
        $reply->question_id=$request->question_id;
        $reply->reply=$request->reply;
        $reply->email=$request->email;
        $reply->save();
        return response("Done");
    	
    }
}
