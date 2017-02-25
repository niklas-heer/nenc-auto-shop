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

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}