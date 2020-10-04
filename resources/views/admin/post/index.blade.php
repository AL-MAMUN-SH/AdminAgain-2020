@extends('Layout.Admin.master')
@section('allconhere')
    <div class="text-right mb-4">
        <a class="font-weight-bold font-italic" href="{{route('dashboard')}}">Dashboard</a>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" class="font-weight-bold" >POSTS TABLE</h4>
                <p class="card-description">
                    Add class <code>Table Post</code>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                               serial
                            </th>
                            <th>
                               Post IMAGE
                            </th>
                            <th>
                                Post Title
                            </th>
                            <th>
                               Category_id
                            </th>
                            <th>
                               Is_featured
                            </th>
                            <th>
                                Post Status
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                       <tbody>
                       @foreach($posts as $post)
                       <tr>
                           <td>{{$posts->firstItem()+$loop->index}}</td>
                           <td>
                               <img src="{{$post->image}}" alt="image"/>
                           </td>
                           <td>{{$post->title}}</td>
                           <td>{{$post->category_id}}</td>
                           <td>{{$post->is_featured?'YES':'NO'}}</td>
                           <td>{{$post->status}}</td>
                           <td>
                               <a href="{{route('post.edit',Crypt::encryptString($post->id))}}" class="btn btn-primary btn-sm">Edit</a>
                               <a href="{{route('post.show',Crypt::encryptString($post->id))}}" class="btn btn-info btn-sm">Show</a>
                               <form class="d-inline-block" action="{{route('post.destroy',$post->id)}}" method="post">
                                   @csrf
                                   @method('delete')
                                   <button type="submit" onclick="return confirm('Are You Sure Want To')" class="btn btn-danger btn-sm">Delete</button>
                               </form>
                           </td>
                       </tr>
                           @endforeach
                       </tbody>
                    </table>
                </div>
            </div>
            {{$posts->links()}}
        </div>
    </div>
@endsection
