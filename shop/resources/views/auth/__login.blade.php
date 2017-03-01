@extends('layouts.login')

@section('content')
    <center>
        <form class="navbar-form navbar-right" method="POST" action="{{route('login')}}">

            {{ csrf_field() }}

            <div class="form-group">
                <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
        </form>
    </center>
@stop