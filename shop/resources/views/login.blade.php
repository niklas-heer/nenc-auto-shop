@extends('layouts.login')

@section('content')
    <center>
        <form class="navbar-form">
            <div class="form-group">
                <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
        </form>
    </center>
@stop