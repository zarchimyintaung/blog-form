@extends('layouts.master')


@section('title','Student')

@section('navabr')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
               <div class="d-flex justify-content-between my-3">
                <h1>All Students</h1>
                <a href="{{route('students.create')}}" class="btn btn-primary">Add New Student</a>
               </div>

               @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success') }}
                    </div>
               @endif
                <table class="table table-striped table-hover">

                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Created_at</td>
                            <td>Action</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ Carbon\Carbon::parse($student->created_at )->format('d-m-y')}}</td>
                                <td>
                                    <a href="{{route('students.show',['id' => $student->id])}}" class="btn btn-primary">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
