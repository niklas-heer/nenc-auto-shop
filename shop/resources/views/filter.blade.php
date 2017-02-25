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
                            <input type="text" class="form-control" id="brand" name="brand">
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