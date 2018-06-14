@extends('layouts.auth')

@section('body')

    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" role="form" method="POST" action="{{ route('login') }}">

            {{ csrf_field() }}

            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="username">Email Address</label>
                <input class="form-input-text" id="username" name="email" type="text" placeholder="Email" required autofocus>
            </div>

            <div class="mb-6">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="password">Password</label>
                <input class="form-input-text" id="password" name="password" type="password" placeholder="******************">
            </div>

            <div class="flex items-center justify-between">
                <button class="btn btn-primary w-full" type="submit">Sign In</button>
            </div>
        </form>
    </div>

@endsection
