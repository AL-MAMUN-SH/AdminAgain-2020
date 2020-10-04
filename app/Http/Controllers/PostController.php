<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] ="Post ALl";
        $data['posts'] = Post::orderBy('id','DESC')->paginate(4);
        return view('admin.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']="Post Create";
        $data['categories']=Category::where('status','Active')->orderBy('name','ASC')->pluck('name','id');
        $data['authors'] =Author::where('status','Active')->orderBy('name','ASC')->pluck('name','id');
        return view('admin.post.create',$data);
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
           'title'=>'required',
           'details'=>'required',
           'category_id'=>'required',
           'author_id'=>'required',
           'status'=>'required',
           'image'=>'mimes:jpeg,jpg,png,ai,eps,psd',
        ]);
        $data=$request->all();
        if ($request->image){
             $data['image']=$this->fileUpload($request->image);
        }
        Post::create($data);
        session()->flash('message','Post Created SuccessFullly');
        return redirect()->route('post.index');
    }

    /** EKHANEH HOLOH JOTUGULAH IMAGE UPLOAD */

    private function fileUpload($image){
          $path="Images/Admin/Posts";
          $filename=time().rand(99999,00000).'.'.$image->getClientOriginalExtension();
          $image->move($path,$filename);
          $fulpath=$path.'/'.$filename;
          return $fulpath;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id=\Crypt::decryptString($id);
        $post = Post::with('category','author')->findOrFail($id);
        $title="Post View";
        return view('admin.post.show',compact('post','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Post Edit';
        $id=\Crypt::decryptString($id);
        $post = Post::findOrFail($id);
        $categories = Category::where('status','Active')->orderBy('name','ASC')->pluck('name','id');
        $authors = Author::where('status','Active')->orderBy('name','ASC')->pluck('name','id');
        return view('admin.post.edit',compact('post','title','categories','authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'=>'required',
            'details'=>'required',
            'category_id'=>'required',
            'author_id'=>'required',
            'status'=>'required',
            'image'=>'mimes:jpeg,jpg,png,ai,eps,psd',
        ]);
        $data=$request->all();
        if ($request->image){
            $data['image']=$this->fileUpload($request->image);
            if ($post->image && file_exists($post->image)){
                unlink($post->image);
            }
        }

        if (!$request->has('is_featured')){
            $data['is_featured'] = 0;
        }
        if ($post->getChanges()){
            session()->flash('message','Post Updated SuccessFullly');
        }else{
            session()->flash('message','Post Edite Not Changed');
        }
        $post->update($data);
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      if ($post->image && file_exists($post->image)){
        unlink($post->image);
      }
      $post->delete();
      session()->flash('error','Post HasBeen Deleted');
      return redirect()->route('post.index');
    }
}
