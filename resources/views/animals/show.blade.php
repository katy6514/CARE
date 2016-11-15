@extends('layouts.master')

@section('title')
    Show Animal
@stop

@section('head')
    <!-- Add animal-specific style file here -->
@stop

@section('main_content')
    @if($id)
        <h1>Show Animal: {{ $id }}</h1>
    @else
        <h1>No Animal Chosen</h1>
    @endif
@stop

@section('scripts')
    <!-- Add animal-specific scripts here -->
@stop
