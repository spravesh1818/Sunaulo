<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Session;

class UserResController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=users::all();
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
            'firstName'=>'required|max:255',
            'middleName'=>'required|max:255',
            'lastName'=>'required|max:255',
            'username'=>'required|max:255',
            'password'=>'required|max:255',
            'email'=>'required|max:255',
            'phone'=>'required|max:10',
            ));

        //write to the daabase and redirect to the view
            $user=new users;
            $user->firstName=$request->firstName;
            $user->middleName=$request->middleName;
            $user->lastName=$request->lastName;
            $user->username=$request->username;
            $user->password=$request->password;
            $user->email=$request->email;
            $user->phone=$request->phone;

            $user->save();

            Session::flash('success','The user was successfully created');
            return redirect()->route('users.index');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
