<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\infographic;
use App\info_file;

class infoController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $infographic=infographic::all();
        $infographic=$infographic->sortByDesc('created_at');
        return view('admin_view.infographic_view')->withInfographics($infographic);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_view.infographic_add');
    	
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
          'description'=>'required',
            
            ));

        $id=time();
        $infographic=new infographic;
        $infographic->id=$id;
        $infographic->title=$request->title;
        $infographic->description=$request->description;
        $infographic->save();

        if($request->hasFile('file')){
                foreach($request->file as $file){
                    $name=$file->getClientOriginalName();
                    $file->storeAs('public/infographics/',$name);
                    $file=new info_file;
                    $file->infographic_id=$id;
                    $file->filename=$name;
                    $file->save();
                }
            }
        return redirect()->route('info.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infographics=infographic::find($id);
        foreach ($infographics->info_file as $file) {
            echo $file->filename;
            \Storage::delete('public/'.$file->filename);
        }
        $infographics->delete();
        return redirect()->route('info.index');

    }
}
