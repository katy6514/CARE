@extends('layouts.master')

@section('title')
    Animal Index
@stop

@section('head')
    <!-- Add animal-specific style file here -->
@stop

@section('main_content')
    <h1>All the animals</h1>


    @foreach($animals as $animal)
        <h2>{{ $animal->name }}</h2>
    @endforeach

@stop

@section('scripts')
    <!-- Add animal-specific scripts here -->
@stop
