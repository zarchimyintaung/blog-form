
@extends('layouts.master')


@section('title','Show')

@section('navabr')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
               <div class="d-flex justify-content-between my-3">
                <h1>{{$student->name}}</h1>
               </div>

               <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Name:</strong>
                        <span>{{$student->name}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Email:</strong>
                        <span>{{$student->email}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Created at:</strong>
                        <span>{{Carbon\Carbon::parse($student->created_at )->format('d-m-y')}}</span>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('students.edit',['id' => $student->id])}}" class="btn btn-success">Edit</a>
                        <a href="{{route('students.destroy',['id' => $student->id])}}" class="btn btn-danger">Delete</a>
                    </li>
               </ul>
            </div>
        </div>
    </div>
@endsection

