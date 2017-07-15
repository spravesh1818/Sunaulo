<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('admin_view.users_view')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin_view.users_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input data

        $this->validate($request,array(
            'name'=>'required|max:255',
            'password'=>'required|max:255|confirmed',
            'email'=>'required|max:255',
            ));

        //write to the daabase and redirect to the view
            $user=new User;
            $user->name=$request->name;
            $user->password=bcrypt($request->password);
            $user->email=$request->email;
            $user->save();

            Session::flash('success','The user was successfully created');
            return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$user=users::find($id);
        //return view('admin_view.users_view')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('admin_view.edit_user')->withUsers($user);
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
         $user=User::find($id);
         $user->name=$request->input('name');
         $user->email=$request->input('email');
         $user->password=bcrypt($request->input('password'));
         $user->save();
         Session::flash('success','The user was successfully updated');
         return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        Session::flash('success',"The user was successfully removed");
        return redirect()->route('user.index');
    }
}
