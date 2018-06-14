@extends('layouts.app')

@section('body')
    <div class="">
        <h1 class="text-5xl text-blue">Patients</h1>

        <div class="piled segment">
            <button class="btn btn-primary">Hello World</button>

            <patient-table></patient-table>
        </div>


    </div>
@endsection
