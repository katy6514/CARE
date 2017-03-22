@extends('layouts.master')

@section('title')
    Show Animal
@endsection

@section('head')
    <!-- Add animal-specific style file here -->
@endsection

@section('main_content')
    @if($id)
        <h1>Show Animal: {{ $id }}</h1>
    @else
        <h1>No Animal Chosen</h1>
    @endif
@endsection

@section('scripts')
    <!-- Add animal-specific scripts here -->
@endsection
