<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')

    <div class="jumbotron main">
        <div class="container">

            @yield('content')


            <br>
        </div> <!-- /container -->
    </div>

    @include('layouts.footer')
    @include('layouts.foot')
</body>