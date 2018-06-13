@extends('layouts.app')

@section('body')
    <div class="items-center justify-center">
        <h1 class="text-5xl text-blue">Login</h1>

        <div class="mt-6 bg-blue-lighter py-4 px-6">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="p-3">
                    <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="p-3">
                    <input id="password" type="password" placeholder="*********" class="form-control" name="password" required>
                </div>

                <div class="mt-4">
                    <button type="submit" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">Login</button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                </div>
            </form>
        </div>


    </div>
@endsection
