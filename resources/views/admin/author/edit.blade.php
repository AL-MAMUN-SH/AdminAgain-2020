@extends('Layout.Admin.master')
@section('allconhere')
    <div class="text-right mb-4">
        <a class="font-weight-bold font-italic" href="{{route('dashboard')}}">Dashboard</a>/<a class="font-weight-bold font-italic" href="{{route('author.index')}}">User List</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class=" grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">AUTHOR Edit Form</h4>
                            <p class="card-description">
                               Only User update
                            </p>
                            <form class="forms-sample" action="{{route('author.update',$author->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                @include('admin.author._form')
                                <button type="submit" class="btn btn-primary mr-2">update</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>

    </div>

@endsection
