<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['authors']=Author::paginate(3);
        $data['title']="All AUthor Here";
        return view('admin.author.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data['title']="Crewate a NEw Author";
       return view('admin.author.create',$data);
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
           'email' => 'required|email|unique:authors',
           'phone' => 'required|between:11,14|unique:authors',
           'address' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:10000',
        ]);
        $data = $request->all();
        if ($request->image){
            $data['image']=$this->fileupload($request->image);
        }
        Author::create($data);
        session()->flash('message','Author created Successfully');
        return redirect()->route('author.index');
    }

    /* FILE Uploades MEthod*/


    private function fileupload($image){
        $path="Images/Admin/Authors";
        $file_name=time().rand(999999,00000).'.'.$image->getClientOriginalExtension();
        $image->move($path,$file_name);
        $ful_path=$path.'/'.$file_name;
        return $ful_path;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id=\Crypt::decryptString($id);
        $author=Author::findOrFail($id);
        $title="Edit Author";
        return view('admin.author.edit',compact('author','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
       $request->validate([
          'name' =>'required',
          'email' =>'required|email|unique:authors,email,'.$author->id,
          'phone' =>'required|between:11,14|unique:authors,phone,'.$author->id,
          'address' =>'required',
           'image' => 'mimes:jpeg,jpg,png|max:10000',
       ]);
       $data=$request->all();
       if ($request->image){
           $data['image']=$this->fileupload($request->image);
           if (file_exists($author->image))
           {
               unlink($author->image);
           }
       }
       $author->update($data);
       if ($author->getChanges()){
           session()->flash('message','Author Updated Successfully');
       }else{
           session()->flash('message','Author Not Updated');
       }
       return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
       if ($author->image && file_exists($author->image)){
          unlink($author->image);
       }
       $author->delete();
       session()->flash('message','Author Has Been  Deleted');
       return redirect()->route('author.index');
    }
}
