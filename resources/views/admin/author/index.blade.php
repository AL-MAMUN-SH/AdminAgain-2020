@extends('Layout.Admin.master')
@section('allconhere')
    <div class="text-right mb-4">
        <a class="font-weight-bold font-italic" href="{{route('dashboard')}}">Dashboard</a>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" class="font-weight-bold" >AUTHORS TABLE</h4>
                <p class="card-description">
                    Add class <code>Table Author</code>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                               serial
                            </th>
                            <th>
                               Author Image
                            </th>
                            <th>
                                Author Name
                            </th>
                            <th>
                               Author Email
                            </th>
                            <th>
                                Author Phone
                            </th>
                            <th>
                                Author Status
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                       <tbody>
                       @foreach($authors as $author)
                       <tr>
                           <td>{{$authors->firstItem()+$loop->index}}</td>
                           <td>
                               <img src="{{$author->image}}" alt="image"/>
                           </td>
                           <td>{{$author->name}}</td>
                           <td>{{$author->email}}</td>
                           <td>{{$author->phone}}</td>
                           <td>{{$author->status}}</td>
                           <td>
                               <a href="{{route('author.edit',Crypt::encryptString($author->id))}}" class="btn btn-primary btn-sm">Edit</a>
                               <form class="d-inline-block" action="{{route('author.destroy',$author->id)}}" method="post">
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
            {{$authors->links()}}
        </div>
    </div>
@endsection

