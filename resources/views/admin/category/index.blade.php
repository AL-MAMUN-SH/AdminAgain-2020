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
                    <table class="table $category">
                        <thead>
                        <tr>
                            <th>
                               #SERIAL
                            </th>
                            <th>
                              CAtegory List
                            </th>
                            <th>
                              Status
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
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$categories->firstItem()+$loop->index}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->status}}</td>
                            <td>{{$category->created_at->diffForHumans()}}</td>
                            <td>
                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <form class="d-inline-block" action="{{route('category.destroy',$category->id)}}" method="post">
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

            {{$categories->links()}}
        </div>
    </div>
@endsection
