<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    @include('partials.headerLogin')
    
    <div class="jumbotron main">
        <div class='container'>

            @include('partials.sidenav')

            @yield('content')

        </div>
    </div>

    @include('partials.footer')
    @include('partials.foot')
</body>