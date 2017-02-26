<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body>
    @include('layouts.partials.header')
    
    <div class="jumbotron main">
        <div class='container'>

            @include('layouts.partials.sidenav')

        </div>
        
        @yield('content')
    </div>

    @include('layouts.partials.footer')
    @include('layouts.partials.foot')
</body>