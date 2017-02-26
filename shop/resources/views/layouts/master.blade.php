<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body>
    @include('layouts.partials.header')
    
    <div class="jumbotron main">

        @include('layouts.partials.sidenav')
        @yield('content')
        
    

    @include('layouts.partials.footer')
    @include('layouts.partials.foot')
    </div>
</body>