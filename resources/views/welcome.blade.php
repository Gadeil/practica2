@extends('layouts.plantilla')
@section('titulo','Home')

@section('content')
    <h1 class="display-1 text-center text-danger mt-4">Home</h1>    
    @include('partials.pagination')
    @yield('content')
@endsection


<!-- -->