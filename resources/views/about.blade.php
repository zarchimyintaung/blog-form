@extends('layouts.master')

@section('title','About')

@section('navabr')

@endsection

@section('content')
    <h1>About Page</h1>
        @if (session()->has('success'))
            <h1>{{session('success')}}</h1>
        @endif
@endsection
