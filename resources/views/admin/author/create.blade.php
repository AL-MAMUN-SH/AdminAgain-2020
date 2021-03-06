@extends('Layout.Admin.master')
@section('allconhere')
    <div class="text-right mb-4">
        <a class="font-weight-bold font-italic" href="{{route('dashboard')}}">Dashboard</a>/<a class="font-weight-bold font-italic" href="{{route('author.index')}}">User List</a>/<a class="font-weight-bold font-italic" href="{{route('author.create')}}">User Create</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class=" grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">User Create Form</h4>
                            <p class="card-description">
                                Only User are Created
                            </p>
                            <form class="forms-sample" action="{{route('author.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                               @include('admin.author._form')
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection
