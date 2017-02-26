@extends('layouts.master')

@section('content')

    @include('layouts.partials.errors')
    
    <div class="container FilterContainer">

        <form class="form-inline marginTop" method="post" action="post_filter" id="filter">

            {{ csrf_field() }}

            <table class="FilterTable">
                <tr>
                    <td>
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
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="model" class="control-label">Modell</label>
                            <input type="text" class="form-control" id="model" name="model">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="maxPrice" class="control-label">Maximal Preis</label>
                            <input type="text" class="form-control" id="maxPrice" name="maxPrice">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="SubmitButton" colspan="3">
                        <button type="submit" class="btn btn-default">Filtern</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

@stop