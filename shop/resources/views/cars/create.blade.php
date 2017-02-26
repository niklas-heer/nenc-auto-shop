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
                        <option value='Alfa Romeo'>Alfa Romeo</option>
                        <option value='Alpina'>Alpina</option>
                        <option value='Ariel'>Ariel</option>
                        <option value='Ascari'>Ascari</option>
                        <option value='Aston Martin'>Aston Martin</option>
                        <option value='Audi'>Audi</option>
                        <option value='Bentley'>Bentley</option>
                        <option value='BMW'>BMW</option>
                        <option value='Bristol'>Bristol</option>
                        <option value='Brooke'>Brooke</option>
                        <option value='Cadillac'>Cadillac</option>
                        <option value='Callaway'>Callaway</option>
                        <option value='Campagna'>Campagna</option>
                        <option value='Caterham'>Caterham</option>
                        <option value='Chevrolet'>Chevrolet</option>
                        <option value='Chrysler'>Chrysler</option>
                        <option value='Citroen'>Citroen</option>
                        <option value='Corvette'>Corvette</option>
                        <option value='Daihatsu'>Daihatsu</option>
                        <option value='Dodge'>Dodge</option>
                        <option value='Elfin'>Elfin</option>
                        <option value='Ferrari'>Ferrari</option>
                        <option value='Fiat'>Fiat</option>
                        <option value='Ford'>Ford</option>
                        <option value='Gumpert'>Gumpert</option>
                        <option value='Holden'>Holden</option>
                        <option value='Honda'>Honda</option>
                        <option value='Hummer'>Hummer</option>
                        <option value='Hyundai'>Hyundai</option>
                        <option value='Invicta'>Invicta</option>
                        <option value='Isuzu'>Isuzu</option>
                        <option value='Jaguar'>Jaguar</option>
                        <option value='Jeep'>Jeep</option>
                        <option value='Kia'>Kia</option>
                        <option value='Koenigsegg'>Koenigsegg</option>
                        <option value='Lamborghini'>Lamborghini</option>
                        <option value='Land Rover'>Land Rover</option>
                        <option value='Lexus'>Lexus</option>
                        <option value='Lobini'>Lobini</option>
                        <option value='Lotus'>Lotus</option>
                        <option value='Marcos'>Marcos</option>
                        <option value='Maserati'>Maserati</option>
                        <option value='Maybach'>Maybach</option>
                        <option value='Mazda'>Mazda</option>
                        <option value='MB Roadcars'>MB Roadcars</option>
                        <option value='Mercedes-Benz'>Mercedes-Benz</option>
                        <option value='Mini'>Mini</option>
                        <option value='Mitsubishi'>Mitsubishi</option>
                        <option value='Morgan'>Morgan</option>
                        <option value='NICE'>NICE</option>
                        <option value='Nissan'>Nissan</option>
                        <option value='Noble'>Noble</option>
                        <option value='Opel'>Opel</option>
                        <option value='Pagani'>Pagani</option>
                        <option value='Perodua'>Perodua</option>
                        <option value='Peugeot'>Peugeot</option>
                        <option value='Porsche'>Porsche</option>
                        <option value='Proton'>Proton</option>
                        <option value='Radical'>Radical</option>
                        <option value='Renault'>Renault</option>
                        <option value='Rolls-Royce'>Rolls-Royce</option>
                        <option value='Saab'>Saab</option>
                        <option value='Saturn'>Saturn</option>
                        <option value='Seat'>Seat</option>
                        <option value='Shelby'>Shelby</option>
                        <option value='Skoda'>Skoda</option>
                        <option value='Smart'>Smart</option>
                        <option value='Spyker'>Spyker</option>
                        <option value='Ssangyong'>Ssangyong</option>
                        <option value='SSC'>SSC</option>
                        <option value='Subaru'>Subaru</option>
                        <option value='Superformance'>Superformance</option>
                        <option value='Suzuki'>Suzuki</option>
                        <option value='Tata'>Tata</option>
                        <option value='Tesla'>Tesla</option>
                        <option value='Toyota'>Toyota</option>
                        <option value='TVR'>TVR</option>
                        <option value='Unique'>Unique</option>
                        <option value='Vauxhall'>Vauxhall</option>
                        <option value='Volkswagen'>Volkswagen</option>
                        <option value='Volvo'>Volvo</option>
                        <option value='Westfield'>Westfield</option>
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