@extends('Layout.Admin.master')
@section('allconhere')
    <div class="text-right mb-4">
        <a class="font-weight-bold font-italic" href="{{route('dashboard')}}">Dashboard</a>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">USER TABLE</h4>
                <div class="table-responsive">
                    <table class="table $newuser">
                        <thead>
                        <tr>
                            <th>
                               #SERIAL
                            </th>
                            <th>
                               User Name
                            </th>
                            <th>
                               User Email
                            </th>
                            <th>
                               User Phone
                            </th>
                            <th>
                              Created_at
                            </th>
                            <th class="text-center">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newusers as $newuser)
                        <tr>
                            <td>{{$newusers->firstItem()+$loop->index}}</td>
                            <td>{{$newuser->name}}</td>
                            <td>{{$newuser->email}}</td>
                            <td>{{$newuser->phone}}</td>
                            <td>{{$newuser->created_at->diffForHumans()}}</td>
                            <td>
                                <a href="{{route('newuser.edit',$newuser->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{route('newuser.show',$newuser->id)}}" class="btn btn-primary btn-sm">show</a>
                                <form class="d-inline-block" action="{{route('newuser.destroy',$newuser->id)}}" method="post">
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

            {{$newusers->links()}}
        </div>
    </div>
@endsection
