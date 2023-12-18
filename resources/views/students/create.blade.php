@extends('layouts.master')


@section('title','Edit')

@section('navabr')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7 mt-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Student </h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('students.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Student Name</label>
                                <input type="text" name="name" class="form-control @error('name')
                                    is-invalid
                                @enderror" id="name" placeholder="Student name">
                                @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Student Email</label>
                                <input type="text" name="email" class="form-control @error('email')
                                    is-invalid
                                @enderror" id="email" placeholder="Student email">
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

