@extends('layouts.master')
@section('content')
    
    <center><a href="{{ url("/user/showAll") }}">{{Auth()->user()->name}}'s Fahrzeuge anzeigen</a></center>
<!--    <center><a href="{{ url("#todo") }}">Profil löschen</a></center>-->

@stop