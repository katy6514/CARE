@extends('layouts.master')

@section('title')
    Search
@stop

@section('head')
    <!-- Add animal-specific style file here -->
@stop

@section('main_content')
    <h1>Search</h1>

    <form method = 'GET' action = '/animals/search'>
      <label for 'searchTerm'> Search by name: </label>
      <input type = 'text' name = 'searchTerm' id = 'searchTerm' value = '{{ $searchTerm or '' }}'>

      <input type = 'checkbox' name = 'caseSensitive' {{ ($caseSensitive) ? 'CHECKED' : '' }} >
      <label> case sensitive </label>

      <br />
      <input type = 'submit' class = 'btn btn-primary btn-small'>

    </form>

    @if($searchTerm != Null)
      <h2>Results for Query: <em>{{ $searchTerm }}</em> </h2>

      @if(count($searchResults) == 0)
        No matches found.
      @else
        @foreach($searchResults as $name => $animal)
          <h3>{{ $name }}</h3>
          <h4>{{ $age }}, {{ $subspecies }}</h4>
        @endforeach
      @endif
    @endif

@stop

@section('scripts')
    <!-- Add animal-specific scripts here -->
@stop
