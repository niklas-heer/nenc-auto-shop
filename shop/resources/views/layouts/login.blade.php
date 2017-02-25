<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body>
    @include('layouts.partials.headerLogin')
    
    <div class="jumbotron main">
        <div class='container'>

            @include('layouts.partials.sidenav')

            @yield('content')

        </div>
    </div>

    @include('layouts.partials.footer')
    @include('layouts.partials.foot')
</body>