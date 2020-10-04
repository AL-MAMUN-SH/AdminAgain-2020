@extends('Layout.Admin.master')
@section('allconhere')
    <div class="text-right mb-4">
        <a class="font-weight-bold font-italic" href="{{route('dashboard')}}">Dashboard</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <table cellpadding="15">
                        <tr rowspan="3">
                            <td><img class="img-fluid" src="{{asset($post->image)}}" alt="HUDDAI"></td>
                        </tr>
                        <tr>
                            <td class="text-success">{{$post->category->name}} / {{$post->author->name}} / {{$post->is_featured?'YES':'NO'}} / {{$post->status}}</td>
                        </tr>
                        <tr>
                            <td class="display-4">{{$post->title}}</td>
                        </tr>
                        <tr>
                            <td>{{$post->details}}</td>
                        </tr>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
