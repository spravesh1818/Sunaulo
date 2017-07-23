<?php

namespace App\Http\Controllers;

use App\articles;
use App\category;
use App\Files;
use Illuminate\Http\Request;
use Session;
use Image;
use App\comment;

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
        $category=category::all();
        return view('admin_view.content_add')->withCategories($category);
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
        $this->validate($request,array(
          'title'=>'required|max:255',
            'category'=>'required|max:255',
            'content'=>'required',
            'image'=>'image',
            ));
        //complete the request
            $article=new articles;
            $article->title=$request->title;
            $article->content=$request->content;
            $article->category=$request->category;
            $article->mostRead=0;
            $article->numberofComments=0;
            $article->author=$request->author;

            //save our image
            if($request->hasFile('image')){
                $image=$request->file('image');
                $filename=time().'.'.$image->getClientOriginalExtension();
                $location=public_path('uploads/'.$filename);   
                Image::make($image)->resize(1250,550)->save($location);

                $article->image=$filename;

            }

            if($request->hasFile('file')){
                $numberOfFiles=0;
                foreach($request->file as $file){
                    $filename=$numberOfFiles.time().'.'.$file->getClientOriginalExtension();
                    $file->storeAs('public',$filename);
                    $numberOfFiles++;
                    $file=new Files;
                    $file->fileName=$filename;
                    $file->title=$article->title;
                    $file->save();

                }
                $article->numberOfFiles=$numberOfFiles;
            }


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
        $category=category::all();

        //return the view and pass in the variable created
        return view('admin_view.edit')->withArticles($edit)->withCategories($category);
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
        //validate the data
        $this->validate($request,array(
          'title'=>'required|max:255',
            'category'=>'required|max:255',
            'content'=>'required',
            'image'=>'image',
            ));

        //save the database
            $article=articles::find($id);
            $article->title=$request->input('title');
            $article->content=$request->input('content');
            $article->category=$request->input('category');
            if($request->hasFile('image')){
                $image=$request->file('image');
                $filename=time().'.'.$image->getClientOriginalExtension();
                $location=public_path('uploads/'.$filename);   
                Image::make($image)->resize(1250,550)->save($location);
                $old_filename=$article->image;
                $article->image=$filename;

                \Storage::delete($old_filename);
            }

    
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
        $comments=comment::all()->where('article_id',$id);
        foreach ($comments as $comment) {
            $comment->delete();
        }
        
        \Storage::delete($article->image);
        $article->delete();
        Session::flash('success',"The post was successfully deleted");
        return redirect()->route('content.index');
    }
}
