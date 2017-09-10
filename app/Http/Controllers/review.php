<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment; 
use App\question;
use App\questionReply;
use App\articles;
use Session;

class review extends Controller
{
	//getting all the stuff
    public function question(){
    	$question=question::all();
    	return view('admin_view.question_review')->withQuestion($question);
    }
    public function reply(){
    	$reply=questionReply::all();
    	return view('admin_view.reply_review')->withReply($reply);

    }

    public function comment(){
    	$comment=comment::all();
        foreach ($comment as $comment) {
            echo $comment->comment;
            echo "<br>";
        }
        //return view('admin_view.comment_review')->withComments($comment);

    }


    //function for deleting all the stuff
    public function questiondel($id){
    	$td=question::find($id);
        $replies=questionReply::all()->where('question_id',$id);
        foreach ($replies as $reply) {
            $reply->delete();
        }
        $td->delete();
        Session::flash('success',"The post was successfully deleted");
        return redirect()->route('question.review');

    }

    public function commentdel($id){
    	$td=comment::find($id);
        $td->delete();
        Session::flash('success',"The post was successfully deleted");
        return redirect()->route('comment.review');
    }
    public function replydel($id){
    	$td=questionReply::find($id);
        $td->delete();
        Session::flash('success',"The post was successfully deleted");
        return redirect()->route('reply.review');
    
    }
}
