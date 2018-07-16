@extends('layouts.master')

@section('title')
    Add an Animal
@stop

@section('head')
    <!-- Add animal-specific style file here -->
@stop

@section('main_content')
    <h1>Add an Animal</h1>

    @if(count($errors) > 0 )
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method='POST' action='/animals/create'>
        {{ csrf_field() }}
        <!-- <input type='text' name='name'> -->

        <div class='form-group'>
            {!! Form::label('Name:') !!}
            {!! Form::text('name', null,
                array(
                    'name'=>'name',
                    'class'=>'form-control',
                    'placeholder'=>'Name',
                    'required'
                    ))!!}
        </div>


        <div class='form-group'>
            {!! Form::label('Gender: ') !!} <br>
            {!! Form::radio('sex', 'male') !!} Male
            {!! Form::radio('sex', 'female', true) !!} Female
                <!-- <input type="radio" name="sex" value="male"> Male
                <input type="radio" name="sex" value="female"> Female -->
        </div>


        <div class='form-group'>
            {!! Form::label('Bio:') !!}
            {!! Form::textarea('bio', null,
                array(
                    'class'=>'form-control',
                    'placeholder'=>'Known history of cat...')) !!}
            <!-- <label for='bio'>Bio: </label>
                <textarea cols="40" rows="5" name="bio"></textarea> -->
        </div>

        <div class='form-group'>
            {!! Form::label('Enclosure:') !!}
            {!! Form::text('enclosure', null,
                array(
                    'name'=>'enclosure',
                    'class'=>'form-control',
                    'placeholder'=>'Letter',
                    'required'
                    ))!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add') !!}
        </div>


        <!-- <input type='submit' value='Submit'> -->
    </form>
@stop

@section('scripts')
    <!-- Add animal-specific scripts here -->
@stop
