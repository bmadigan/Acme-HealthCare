@extends('layouts.app')

@section('body')
    <div class="flex flex-col items-center justify-center">

        <div class="flex items-center flex-no-shrink text-white mt-8 mb-6 text-blue">
            <svg class="fill-current h-16 w-16 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
            <span class="font-semibold text-5xl tracking-tight">Acme HealthCare</span>
        </div>

        <h1 class="text-2xl text-blue-darker">Greetings Stranger.</h1>

        <div class="mt-4">
            <a href="{{ route('login') }}" class="text-xl text-blue hover:text-blue-darker">Login To Your Account</a>
        </div>
    </div>
@endsection
