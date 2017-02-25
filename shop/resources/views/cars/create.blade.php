@extends('layouts.master')

@section('content')

    {!! Form::open(array('action' => 'CarController@store', 'files'=>true)) !!}

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title" class="control-label">Titel</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="description" class="control-label">Beschreibung</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="price" class="control-label">Preis</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="brand" class="control-label">Marke</label>
            <input type="text" class="form-control" id="brand" name="brand">
        </div>
        <div class="form-group">
            {!! Form::label('model','Modell',array('id'=>'model','class'=>'')) !!}
            {!! Form::text('model','',array('id'=>'model','class'=>'', 'placeholder' => 'model')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Bild') !!}
            {!! Form::file('image', null) !!}
            
            <p class="errors">{!!$errors->first('image')!!}</p>
            
            @if(Session::has('error'))
                <p class="errors">{!! Session::get('error') !!}</p>
            @endif
        </div>


        <div class="form-group">
            {!! Form::submit('Senden') !!}
        </div>

        @include('layouts.partials.errors')

    {!! Form::close() !!}

@endsection