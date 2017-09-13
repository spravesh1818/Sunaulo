<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallery;
use App\gallery_file;

class galleryController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
    	$gallery=gallery::all();
        return view("admin_view.gallery_view")->withGallery($gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 	
    	return view("admin_view.gallery_create");
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
            ));

        $id=time();
        $gallery=new gallery;
        $gallery->id=$id;
        $gallery->title=$request->title;
        $gallery->description=$request->description;
        $gallery->save();

        if($request->hasFile('file')){
                foreach($request->file as $file){
                    $name=$file->getClientOriginalName();
                    $file->storeAs('public/gallery_images',$name);
                    $file=new gallery_file;
                    $file->gallery_id=$id;
                    $file->filename=$name;
                    $file->save();
                }
            }
        echo "All done";
        
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $gallery=gallery::find($id);
        foreach ($gallery->gallery_file as $file) {
            \Storage::delete('public/gallery/'.$file->filename);
        }
        $gallery->delete();
        $gal=gallery::all();
        return view("admin_view.gallery_view")->withGallery($gal);   

    

    }
}
