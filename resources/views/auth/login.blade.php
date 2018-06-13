@extends('layouts.auth')

@section('body')

    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" role="form" method="POST" action="{{ route('login') }}">

            {{ csrf_field() }}

            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="username">Email Address</label>
                <input class=" appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight" id="username" name="email" type="text" placeholder="Email" required autofocus>
            </div>

            <div class="mb-3">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="password">Password</label>
                <input class=" appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight mb-3" id="password" name="password" type="password" placeholder="******************">
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded w-full" type="submit">Sign In</button>
            </div>
        </form>
    </div>

@endsection
