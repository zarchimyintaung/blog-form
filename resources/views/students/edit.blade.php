@extends('layouts.master')


@section('title','Student')

@section('navabr')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7 mt-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Student </h2>
                    </div>

                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success') }}
                    </div>
                    @endif

                    <div class="card-body">
                        <form action="{{ route('students.update',['id' => $student->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Student Name</label>
                                <input type="text" name="name" class="form-control @error('name')
                                    is-invalid
                                @enderror" value="{{$student->name}}" id="name" placeholder="Student name">
                                @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Student Email</label>
                                <input type="text" name="email" class="form-control @error('email')
                                    is-invalid
                                @enderror" value="{{$student->email}}" id="email" placeholder="Student email">
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

