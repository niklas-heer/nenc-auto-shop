@if(count($errors))
    <center><p>Diese Seite wird in <span id="zeit">3</span> neu geladen.</p></center>
    
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
        var timer = 3;

        var thisInterval = setInterval(function () {
            timer = timer - 1;
            document.getElementById("zeit").innerHTML = timer;

            if (timer === 0) {
                clearInterval(thisInterval);
                window.location.reload();
            }

        }, 1000);

    </script>
@endif



