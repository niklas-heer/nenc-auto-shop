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
                <input type="text" class="form-control" id="brand" name="brand" value="">
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

            @include('layouts.partials.errors')

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