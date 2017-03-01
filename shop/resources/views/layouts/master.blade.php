<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    @include('partials.header')
    
    <div class="jumbotron main">

        @include('partials.sidenav')
        @yield('content')
        
        @include('partials.footer')
        @include('partials.foot')
    </div>
</body>