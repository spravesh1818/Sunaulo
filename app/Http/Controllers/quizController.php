<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quiz;
use App\quizC;
use Session;

class quizController extends Controller
{
  
    public function __construct(){

        $this->middleware('auth');
    }
    public function index()
    {
    	$quiz=quiz::all();
    	return view('admin_view.quiz_view')->withQuiz($quiz);
    }

    
    public function create()
    {
    	return view('admin_view.quiz_add');
    }

    
    public function store(Request $request)
    {
        $this->validate($request,array(
          'question'=>'required|max:255',
            'answer'=>'required|max:255',
            'option1'=>'required',
            'option2'=>'required',
            'option3'=>'required',
            'description'=>'required',
        ));

        $quiz=new quiz;
        $quiz->question=$request->question;
        $quiz->answer=$request->answer;
        $quiz->option1=$request->option1;
        $quiz->option2=$request->option2;
        $quiz->option3=$request->option3;
        $quiz->description=$request->description;
        $quiz->save();
        Session::flash('success','The question was successfully added');
        return redirect()->route('quiz.create');
    }

    
    public function show($id)
    {
       
    }

    
    public function edit($id)
    {
        //find the post in the database and save it as a variable
        $edit=quiz::find($id);
    

        //return the view and pass in the variable created
        return view('admin_view.quiz_edit')->withquiz($edit);
    }

    
    public function update(Request $request,$id)
    {
        $this->validate($request,array(
          'title'=>'required|max:255',
            'category'=>'required|max:255',
            'content'=>'required',
            'image'=>'image',
            ));
        
        $quiz=quiz::find($id);
        $quiz->question=$request->input('question');
        $quiz->answer=$request->input('answer');
        $quiz->option1=$request->input('option1');
        $quiz->option2=$request->input('option2');
        $quiz->option3=$request->input('option3');
        $quiz->description=$request->input('description');
        $quiz->save();
        Session::flash('success','The question was updated successfully added');
        return redirect()->route('quiz.index');

    }

    public function destroy($id)
    {
        $quiz=quiz::find($id);
        $quiz->delete();
        Session::flash('success',"The question was successfully deleted");
        return redirect()->route('quiz.index');
    }



//quizzes not question below
     public function indexq()
    {
        $quiz=quiz::all();
        return view('admin_view.quiz_addQ')->withQuiz($quiz);
    }

    
    public function createq()
    {   
        $quiz=quiz::all();
        return view('admin_view.quiz_addQ')->withQuiz($quiz);
    }

    
    public function storeq(Request $request)
    {
        //echo $request->choice3;
        $this->validate($request,array(
          'quizname'=>'required|max:255',
            ));

        $quizC=new quizC;
        $question_numbers=[];
        foreach ($request->checkbox as $check) {
            //echo $check;
            array_push($question_numbers, $check);
        }
        $quizC->quizname=$request->quizname;
        $string=serialize($question_numbers);
        $quizC->questions=$string;
        $quizC->save();
        Session::flash('success','New quiz Created Sucessfully');
        return redirect()->route('quiz.index');
        
    }

    
    public function showq($id)
    {
       
    }

    
    public function editq($id)
    {
        //find the post in the database and save it as a variable
        $edit=quiz::find($id);
        

        //return the view and pass in the variable created
        //return view('admin_view.quiz_edit')->withquiz($edit);
    }

    
    public function updateq(Request $request,$id)
    {
        $this->validate($request,array(
          'title'=>'required|max:255',
            'category'=>'required|max:255',
            'content'=>'required',
            'image'=>'image',
            ));
        
        $quiz=quiz::find($id);
        $quiz->question=$request->input('question');
        $quiz->answer=$request->input('answer');
        $quiz->option1=$request->input('option1');
        $quiz->option2=$request->input('option2');
        $quiz->option3=$request->input('option3');
        $quiz->description=$request->input('description');
        $quiz->save();
        Session::flash('success','The question was updated successfully added');
        return redirect()->route('quiz.index');

    }

    public function destroyq($id)
    {
        $quiz=quiz::find($id);
        $quiz->delete();
        Session::flash('success',"The question was successfully deleted");
        return redirect()->route('quiz.index');
    }
}



	