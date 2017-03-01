<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#navbar"
                    aria-expanded="false"
                    aria-controls="navbar"
            >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href='{{ url('/') }}'>nenc auto shop</a>
        </div>
        <div id="MenuHide" onClick="openNav();" class="MenuHide">
            <img class="MenuHideIcon" src="{{ URL::asset("img/menu.png") }}">
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">
                <button type="button" onclick="window.location.href='{{route('login')}}'" class="btn btn-success">Login</button>
            </div>
        </div>
    </div>
</nav>
