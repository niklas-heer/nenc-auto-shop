@extends('layouts.master')

@section('content')

    <div class="createContainer">
        <form id="store" class="marginTop" method="POST" action="store" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title" class="control-label">Titel</label>
                <input type="text" class="form-control" id="title" name="title" value="">
            </div>
            <div class="form-group">
                <label for="description" class="control-label">Beschreibung</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="price" class="control-label">Preis</label>
                <input type="text" class="form-control" id="price" name="price" value="">
            </div>
            <div class="form-group">
                <label for="brand" class="control-label">Marke</label>
                <select class="form-control" id="brand" name="brand">
                <option value='Audi'>Audi</option>
                    <option value='BMW'>BMW</option>
                    <option value='Honda'>Honda</option>
                    <option value='Mazda'>Mazda</option>
                    <option value='Mercedes-Benz'>Mercedes-Benz</option>
                    <option value='Mitsubishi'>Mitsubishi</option>
                    <option value='Nissan'>Nissan</option>
                    <option value='Opel'>Opel</option>
                    <option value='Porsche'>Porsche</option>
                    <option value='Tesla'>Tesla</option>
                    <option value='Toyota'>Toyota</option>
                    <option value='Volkswagen'>Volkswagen</option>
                    <option value='Volvo'>Volvo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="model" class="control-label">Model</label>
                <input type="text" class="form-control" id="model" name="model" value="">
            </div>
            <br>
            <div class="form-group">
                <input type="file" name="image[]" multiple>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default">Senden</button>
            </div>

            @include('partials.errors')

        </form>
    </div>

    <script>
        var form = document.getElementById('store');
        var request = new XMLHttpRequest();

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var formdata = new FormData(form);

            request.open('post', 'store');
            request.addEventListener('load', transferComplete);
            request.send(formdata);
        });

        function transferComplete(data) {
            document.write(data.currentTarget.response);
        }

    </script>

@endsection