@extends('layouts.app')

@section('body')
    <div class="flex items-center justify-center">
        <h1 class="text-5xl text-blue">Welcome Back {{ Auth::user()->name }}.</h1>

    </div>
@endsection