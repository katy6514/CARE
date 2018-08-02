@extends('layouts.master')

@section('title')
    Add an Animal
@stop

@section('head')
    <!-- <style>
        main form{
            width:800px;
            margin:20px auto 100px auto;
        }
    </style> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
@endsection

@section('main_content')
    <h1>Add a Cat</h1>

    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            There were some problems submitting the form, please see below for more information.
        </div>
    @endif

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
            {!! Form::label('sub_species:') !!}
                @if($errors->get('sub_species'))
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors -> get('sub_species') as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
            <select name='sub_species' id='sub_species' value="{{ old('sub_species') }}">
                <option value="" disabled selected>Select...</option>
                @foreach($sub_species_for_dropdown as $sub_species)
                    <option value='{{ $sub_species }}'> {{ $sub_species }} </option>
                @endforeach
            </select>

        </div>


        <div class='form-group'>
            {!! Form::label('Sex: ') !!} <br>
            {!! Form::radio('sex', 'female', true) !!} Female
            {!! Form::radio('sex', 'male') !!} Male
                <!-- <input type="radio" name="sex" value="male"> Male
                <input type="radio" name="sex" value="female"> Female -->
        </div>

        <div class='form-group'>
            {!! Form::label('birth_date:') !!}
            <input class="date form-control" type="text" id="birth_date" name="birth_date" value="{{ old('birth_date') }}" placeholder="MM/DD/YYYY">
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
@stop

@section('scripts')
    <!-- Add animal-specific scripts here -->
    <script type="text/javascript">
        $('.date').datepicker({
           format: 'mm-dd-yyyy'
         });
    </script>
@stop
