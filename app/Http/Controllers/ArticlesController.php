<?php

namespace App\Http\Controllers;

use App\articles;
use Illuminate\Http\Request;
use Session;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

        $this->middleware('auth');
    }
    public function index()
    {
        $articles=articles::all();
        return view('admin_view.content_view')->withArticles($articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin_view.content_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate first
        /*$this->validate($request,array(
          'title'=>'required|max:255',
            'category'=>'required|max:255',
            'keywords'=>'required|max:255',
            'author'=>'required|max:255',
            ));
        //complete the request
        */

            $article=new articles;
            $article->title=$request->title;
            $article->content=$request->content;

            $article->save();
            Session::flash('success','The article was successfully created');
            return redirect()->route('content.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $article=articles::find($id);
        $content=articles::orderBy('id','desc')->limit(4)->get();
        
       return view('single')->withArticles($article)->withContent($content);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and save it as a variable
        $edit=articles::find($id);
    

        //return the view and pass in the variable created
        return view('admin_view.edit')->withArticles($edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //validae the data

        //save the database
            $article=articles::find($id);
            $article->title=$request->input('title');
            $article->content=$request->input('content');
            $article->save();
            Session::flash('success','The article was successfully updated');
        //redirect with flash data to content.show
            return redirect()->route('content.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=articles::find($id);
        $article->delete();
        Session::flash('success',"The post was successfully deleted");
        return redirect()->route('content.index');
    }
}
