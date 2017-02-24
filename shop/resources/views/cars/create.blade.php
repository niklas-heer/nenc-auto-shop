@extends('layouts.master')

@section('content')

    <form method="POST" action="/cars">

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
            <label for="model" class="control-label">Modell</label>
            <input type="text" class="form-control" id="model" name="model">
        </div>
        

        Foto: {!! Form::file('image') !!}


        <div class="form-group">
            <input type="submit" value="Senden">
        </div>

        @include('layouts.partials.errors')

    </form>

@endsection
