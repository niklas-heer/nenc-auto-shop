@extends('layouts.master')

@section('content')
    <center><p>{!! $logMessage !!} </p></center>
    <center><button onclick="window.location.href='home'">Erneut versuchen</button></center>
@stop
