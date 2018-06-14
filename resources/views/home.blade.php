@extends('layouts.app')

@section('body')
    <div class="flex items-center justify-center">

        <div class="segment w-full">

            <h1 class="text-3xl text-blue">Welcome Back {{ Auth::user()->name }}.</h1>

            <p class="my-8">
                This would normally be a Dashboard screen showing upcoming Appointments, Patient Info, etc...
            </p>
            <p>Click the Patients menu option to view a VueJS Table component that is populated with your Patients</p>
        </div>

    </div>
@endsection
