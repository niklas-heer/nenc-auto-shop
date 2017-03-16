{{-- dd(get_defined_vars()['__data']) --}}

@extends('layouts.master')

@section('content')

<div class="container">
    <div class="innerContainer">
        
        <script src='{{ URL::asset("blueimp-gallery-2.23.0/js/blueimp-gallery.min.js") }}'></script>

        @if($allCars->count() > 0)

            @if(isset($errMessage))
                <center><p>{!! $errMessage !!} </p></center>
                <center><button onclick="{{ url('/home') }}">Erneut versuchen</button></center>
                <br>
                <center><p>Folgende Fahrzeuge haben einigen Ihrer Suchkriterien entsprochen:</p></center>
            @endif

            @foreach($allCars as $car)

                <div class="carObject" id="carObject{{ $car->id }}">
                    <div class="col-sm-12 row carTitleWrap">
                        
                        @if( isset($showDelete) && $showDelete == 1)
                            <div class="col-xs-10">
                                <h4 class="carTitle">{{ $car->title }}</h4>
                            </div>

                            <div class="col-xs-1 deleteAreYouSure">
                                <center><i class="fa fa-window-close close" aria-hidden="true" link="{{ url('/car/delete/' . $car->id) }}"></i></center>
                            </div>
                            <div class="col-xs-1">
                                <center><i class="fa fa-pencil-square-o edit" aria-hidden="true" onclick="window.location.href='{{ url('/car/edit/' . $car->id) }}'"></i></center>
                            </div>
                        @else
                            <div class="col-xs-12">
                                <h4 class="carTitle">{{ $car->title }}</h4>
                            </div>
                        @endif
   
                    </div>

                    <div class='imagesWrap'>

                        @if(isset($allImages))

                            <div id="blueimp-gallery-carousel_{{ $car->id }}" class="image blueimp-gallery blueimp-gallery-controls blueimp-gallery-carousel">
                              <div class="slides"></div>
                              <h3 class="title"></h3>
                              <a class="prev">‹</a>
                              <a class="next">›</a>
                              <a class="play-pause"></a>
                              <ol class="indicator"></ol>
                            </div>

                            <div id="links_{{ $car->id }}">
                                @foreach($allImages as $image)
                                    @if ($car->id === $image->car_id)
                                        <a href="{{ url('/'.$image->path) }}"></a>
                                    @endif
                                @endforeach
                            </div>
                        @endif

                    </div>
                    <div class="detailsWrap">
                        <table class="details" width="200">
                            <tr>
                                <td>Marke:</td>
                                <td>{{ $car->brand }}</td>
                                <td>Modell:</td>
                                <td>{{ $car->model }}</td>
                            </tr>
                            <tr>
                                <td>Preis:</td>
                                <td>{{ $car->price }} €</td>
                            </tr>
                        </table>

                        <p class="detailsDescription">
                            {{ $car->description }}
                        </p>

                    </div>
                </div>

                <script>
                document.getElementById('links_{{ $car->id }}').onclick = function (event)
                {
                    event = event || window.event;
                    var target = event.target || event.srcElement,
                        link = target.src ? target.parentNode : target,
                        options = {index: link, event: event},
                        links = this.getElementsByTagName('a');

                    blueimp.Gallery(links, options);
                };

                blueimp.Gallery(
                    document.getElementById('links_{{ $car->id }}').getElementsByTagName('a'),
                    {
                        container: '#blueimp-gallery-carousel_{{ $car->id }}',
                        carousel: true
                    }
                );
                </script>

            @endforeach
        @endif
    </div>
</div>
@stop
