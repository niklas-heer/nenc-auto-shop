function onResize(){
    if(document.getElementById("Body").scrollWidth < 1430){
        document.getElementById("Banner").style.display="none";
        document.getElementById("MenuHide").style.display="block";
    }else{
        document.getElementById("Banner").style.display="block";
        document.getElementById("MenuHide").style.display="none";
        closeNav();
    }
}

var state=0;

/* Set the width of the side navigation to 250px */
function openNav() {
    
    if (state===0) {
        document.getElementById("mySidenav").style.width = "250px";
        state=1;
    } else {
        closeNav();
        state=0;
    }
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}