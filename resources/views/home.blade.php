@extends('layouts.master')

@section('title','Home')


@section('navabr')
    @parent
@endsection

@section('content');
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card mt-4">
                    <div class="card-header">
                        <h1>Blog Form</h1>
                    </div>
                    <div class="card-body">

                        {{--
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif --}}

                        <form action="{{route('blog.store')}}" method="POST" class="p-4 shadow-lg" >
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control @error('title')
                                    is-invalid
                                @enderror" id="title" placeholder="    Blog Title">
                                @error('title')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="desc" class="form-label">Blog Description</label>
                                <textarea class="form-control  @error('desc')
                                is-invalid
                            @enderror" name="desc" id="desc" rows="3"></textarea>
                                @error('desc')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                              </div>
                              <button class="btn btn-dark">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
