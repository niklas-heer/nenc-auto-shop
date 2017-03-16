@extends('layouts.master')

@section('content')

    <div class="createContainer">
        <form id="update" class="marginTop" method="POST" action="car/update/{{$car->id}}" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title" class="control-label">Titel</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$car->title}}">
            </div>
            <div class="form-group">
                <label for="description" class="control-label">Beschreibung</label>
                <textarea class="form-control" id="description" name="description">{{$car->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="price" class="control-label">Preis</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$car->price}}">
            </div>
            <br>
            
            <b>Fotos hochladen:</b>
            <div class="form-group">
                <input type="file" name="image[]" multiple>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-default">Senden</button>
            </div>

            @include('partials.errors')

        </form>
        
            @foreach($allImages as $image)
                <div class="carObjectEdit">
                    <div class="col-sm-12 row carTitleWrap">
                        <div class="col-xs-11"></div>

                        <div class="col-xs-1 deleteAreYouSure">
                            <center><i class="fa fa-window-close close" aria-hidden="true" link="{{ url('/image/delete/' . $image->id) }}"></i></center>
                        </div>
                    </div>
                    <div>
                        <img width='100%' height="50%" src="{{ URL::asset($image->path) }}">
                    </div>
                </div>
            @endforeach
        
    </div>

    <script>
        var form = document.getElementById('update');
        var request = new XMLHttpRequest();

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var formdata = new FormData(form);

            request.open('post', '{{ url("car/update/$car->id") }}');
            request.addEventListener('load', transferComplete);
            request.send(formdata);
        });

        function transferComplete(data) {
            document.write(data.currentTarget.response);
        }

    </script>

@endsection