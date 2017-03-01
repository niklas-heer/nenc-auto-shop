@if(count($errors))
    <center><p>Diese Seite wird in <span id="zeit">5</span> neu geladen.</p></center>
    
    <div class="form-group">
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <script>
        var timer = 5;

        setInterval(function () {
            timer = timer - 1;
            document.getElementById("zeit").innerHTML = timer;

            if (timer === 0) window.location.href='/nenc-auto-shop/shop/public/cars/create';

        }, 1000);

    </script>
@endif



