@extends('layouts.master')

@section('content')
<!-- Filter Formular -->
    <div class="container KontaktContainer">
        <form class="form-inline marginTop">
          <table class="FilterTable">
                <tr>
                    <th>
                        <h3>Kontaktformular</h3>
                    </th>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="Anrede">Anrede: </label>
                        <select class="form-control" id="Anrede">
                            <option>Firma</option>
                            <option>Herr</option>
                            <option>Frau</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="Name">Name: </label>
                            <input type="text" class="form-control" id="Name">
                        </div>
                        <div class="form-group">
                            <label for="Vorname">Vorname: </label>
                            <input type="text" class="form-control" id="Vorname">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="Strasse">Straße: </label>
                            <input type="text" class="form-control" id="Strasse">
                        </div>
                        <div class="form-group">
                            <label for="Hausnummer">Hausnummer: </label>
                            <input type="number" class="form-control" id="Hausnumer">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="PLZ">PLZ: </label>
                            <input type="number" class="form-control" id="PLZ">
                        </div>
                        <div class="form-group">
                            <label for="Ort">Wohnort: </label>
                            <input type="text" class="form-control" id="Wohnort">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="eMail">E-Mail: </label>
                            <input type="email" class="form-control" id="eMail">
                        </div>
                        <div class="form-group">
                            <label for="Telefon">Telefon: </label>
                            <input type="text" class="form-control" id="Telefon">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="Bemerkung">Bemerkung: </label>
                            <textarea cols="90" rows="5" type="text" class="form-control" id="Bemerkung"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="SubmitButton" colspan="2">
                        <button type="submit" class="btn btn-default">Abschicken</button>
                    </td>
                </tr>
            </table>
        </form>	
    </div>
    <!-- ENDE -->
@stop
