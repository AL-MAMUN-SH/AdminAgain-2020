<?php

namespace App\Http\Controllers;

use App\Newuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NewuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']="All User";
        $data['newusers']=Newuser::paginate(3);
        return view('admin.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']="Create New User";
        return view('admin.user.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'name' => 'required',
           'email' => 'required|email|unique:newusers',
           'phone' => 'required|between:11,14|unique:newusers',
           'password' => 'required|min:6|confirmed',
       ]);
       $data=$request->all();
       $data['password']=Hash::make($data['password']);
       Newuser::create($data);
       session()->flash('message','User Create Successfully');
       return redirect()->route('newuser.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newuser  $newuser
     * @return \Illuminate\Http\Response
     */
    public function show(Newuser $newuser)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newuser  $newuser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id= \Crypt::decryptString($id);
        $newuser=  Newuser::findOrFail($id);
        $title ="Edite a User";
        return view('admin.user.edit',compact('newuser','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newuser  $newuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newuser $newuser)
    {
        $request->validate([
            'name'=>'required',
            'email'=> 'required|email|unique:newusers,email,'.$newuser->id,
            'phone'=> 'required||between:11,14|unique:newusers,phone,'.$newuser->id,
        ]);
        $newuser->update($request->all());
        session()->flash('message','User Update Successfully');
        return redirect()->route('newuser.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newuser  $newuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newuser $newuser)
    {
        $newuser->delete();
        session()->flash('error','User Deleted Successfully');
        return redirect()->route('newuser.index');
    }
}
