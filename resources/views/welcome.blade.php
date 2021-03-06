@extends('layouts.app')

@section('body')
    <div class="flex flex-col items-center justify-center">

        <div class="flex items-center flex-no-shrink text-white mt-8 mb-6 text-blue">
            <svg class="fill-current h-16 w-16 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
            <span class="font-semibold text-5xl tracking-tight">Acme HealthCare</span>
        </div>

        <h1 class="text-3xl text-blue-dark">Hello.</h1>
        <h2 class="text-2xl text-blue">Welcome to your patient portal</h2>

        <div class="mt-8">
            <a href="{{ route('login') }}" class="uppercase text-blue hover:text-blue-darker">You May Login To Your Account</a>
        </div>

        <div class="mt-4 bg-white rounded border border-beige p-4">
            <p class="text-sm text-grey-dark">
                Login Test Account: <strong>Dr. John Smith</strong><br>
                Email: <strong>doctor@testing.com</strong><br>
                Password: <strong>secret</strong>
            </p>
        </div>
    </div>
@endsection
