@extends('layouts.app')

@section('body')
    <div class="flex items-center justify-center">
        <h1 class="text-5xl text-blue">{{ $patient->name }}</h1>

    </div>
@endsection
