@extends('layouts.master')

@section('content')

    <div onClick="closeNav();" class="container FilterContainer">
        
        <form class="form-inline marginTop" method="POST" action="filter" id="filter">
            
            {{ csrf_field() }}
            
            @if(Session::has('error'))
                <p class="errors">{!! Session::get('error') !!}</p>
            @endif
            
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
                            <label for="price" class="control-label">Preis</label>
                            <input type="text" class="form-control" id="price" name="price">
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