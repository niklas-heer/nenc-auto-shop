<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')

    <div class="jumbotron">
        <div class="container">

            @yield('content')


            <br>
            @include('layouts.footer')
        </div> <!-- /container -->
    </div>

    @include('layouts.foot')
</body>