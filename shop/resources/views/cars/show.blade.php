{{-- dd(get_defined_vars()['__data']) --}}

@extends('layouts.master')

@section('content')

    <script src='{{ URL::asset("blueimp-gallery-2.23.0/js/blueimp-gallery.min.js") }}'></script>

    @if($car !== NULL)
        <div class="carObject" id="carObject{{ $car->id }}">
            <div class="col-xs-12 row carTitleWrap">
                <div class="col-xs-11">
                    <h4 class="carTitle">{{ $car->title }}</h4>
                </div>
                <div class="col-xs-1">
                    <center>
                        <i class="fa fa-window-close close" aria-hidden="true"></i>
                    </center>
                </div>
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
                                <a href="/nenc-auto-shop/shop/public/{{ $image->path }}"></a>
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
    @else
    <div>
        <p>Es existiert kein Inserat mit dieser ID.</p>
    </div>
    @endif
@stop
