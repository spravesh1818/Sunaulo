<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curiousity;
use Session;

class JigyasaController extends Controller
{

    public function index()
    {
        $jigyasa=Curiousity::all();
        return view('admin_view.jigyasa_view')->withJigyasa($jigyasa);
    }

    public function destroy($id)
    {
        $jigyasa=Curiousity::find($id);
        $jigyasa->delete();
        Session::flash('success',"The question was successfully removed");
        return redirect()->route('jigyasa.index');
    }

    public function create(Request $request){
        $question=new Curiousity;
        $question->name=$request->name;
        $question->email=$request->email;
        $question->question=$request->question;
        $question->save();
        return response("Done");
    }
}
