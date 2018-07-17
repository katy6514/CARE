@extends('layouts.master')

@section('title')
    Add an Animal
@endsection

@section('head')
    <style>
        main form{
            width:800px;
            margin:20px auto 100px auto;
        }
    </style>
@endsection

@section('main_content')
    <h1>Add a Cat</h1>

    <form method='POST' action='/animals/create'>
        {{ csrf_field() }}
        <!-- <input type='text' name='name'> -->


        <div class='form-group'>
            {!! Form::label('name:') !!}
                @if($errors->get('name'))
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors -> get('name') as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
            {!! Form::text('name', null,
                array(
                    'name' => 'name',
                    'id' => 'name',
                    'class' => 'form-control',
                    'placeholder' => 'Name',
                    'value' => '{{ old(\'name\') }}'
                    ))!!}
        </div>


        <div class='form-group'>
            {!! Form::label('Sex: ') !!} <br>
            {!! Form::radio('sex', 'female', true) !!} Female
            {!! Form::radio('sex', 'male') !!} Male
                <!-- <input type="radio" name="sex" value="male"> Male
                <input type="radio" name="sex" value="female"> Female -->
        </div>


        <div class='form-group'>
            {!! Form::label('bio:') !!}
            {!! Form::textarea('bio', null,
                array(
                    'name' => 'bio',
                    'id' => 'bio',
                    'class'=>'form-control',
                    'placeholder'=>'Known history of cat...',
                    'value' => '{{ old(\'bio\') }}'
                     ))!!}
            <!-- <label for='bio'>Bio: </label>
                <textarea cols="40" rows="5" name="bio"></textarea> -->
        </div>

        <div class='form-group'>
            {!! Form::label('enclosure:') !!}
                @if($errors->get('enclosure'))
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors -> get('enclosure') as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
            {!! Form::text('enclosure', null,
                array(
                    'id' => 'enclosure',
                    'name' => 'enclosure',
                    'class' => 'form-control',
                    'placeholder' => 'Letter',
                    'value' => '{{ old(\'enclosure\') }}'
                    ))!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add') !!}
        </div>


        <!-- <input type='submit' value='Submit'> -->
    </form>
@endsection

@section('scripts')
    <!-- Add animal-specific scripts here -->
@endsection
