<div>
    <center><p class="error">Diese Seite existiert noch nicht!</p></center>
    <center><p>Sie werden in <span id="zeit">2</span> Sekunden auf die Hauptseite geleitet</p></center>
</div>

<script>
    var timer=2;
    
    setInterval(function(){
        timer = timer - 1;
        document.getElementById("zeit").innerHTML = timer;
        
        if (timer===0) window.location.href = "home";
        
    },1000);
   
</script>