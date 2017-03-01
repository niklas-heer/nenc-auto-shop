<!-- SideNav -->
<div id="mySidenav" class="sidenav">
    <button class="closebtn" onclick="closeNav()">
        <i class="fa fa-window-close" aria-hidden="true"></i>
    </button>
    @if(Auth::check())
    <a href="{{ url('/user/showAccount') }}"><i class="fa fa-id-card"></i>&nbsp;{{Auth()->user()->name}}</a>
    @endif
    
    <a href='{{ url('/car/showAll') }}'><i class="fa fa-th-list" aria-hidden="true"></i>&nbsp;Inserate</a>
    
    @if(Auth::check())
        <a href='{{ url('/car/create') }}'><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;Verkaufen</a>
        <a href='{{ url('/logout') }}'><i class="fa fa-sign-out" aria-hidden="true"></i> LogOut</a>
    @else
        <a href='{{ url('/register') }}'><i class="fa fa-sign-in" aria-hidden="true"></i> Registrieren</a>
        <a href='{{ url('login') }}'><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
    @endif
</div>
<!-- SideNav ENDE -->	
        
	