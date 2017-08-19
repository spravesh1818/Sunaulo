<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\articles;
use App\comment;
use Session;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=category::all();
        return view('admin_view.category_view')->withCategories($category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_view.category_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
          'title'=>'required|max:255',
            ));

        $category=new category;
        $category->title=$request->title;

        $category->save();
         return redirect()->route('category.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=category::find($id);
    

        //return the view and pass in the variable created
        return view('admin_view.category_edit')->withCategory($edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,array(
          'title'=>'required|max:255',
            ));
        
        $category=category::find($id);
        $category->title=$request->title;
        $category->save();
        Session::flash('success','The category was updated successfully added');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=category::find($id);
        $articles=articles::all()->where('category_id',$id);
        foreach ($articles as $article) {
            $article->tags()->detach();
            $comments=comment::all()->where('article_id',$article->id);
        foreach ($comments as $comment) {
            $comment->delete();
        }
        
        \Storage::delete($article->image);
        $article->delete();
        }
        $category->delete();
        return redirect()->route('category.index');
    }
}
