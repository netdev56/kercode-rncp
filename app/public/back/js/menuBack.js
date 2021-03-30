function menuResponsive() {
    var navBar = document.getElementById("navbar_haut");
    if (navBar.className === "nav_haut") {
        navBar.className += " responsive";
    } else {
        navBar.className = "nav_haut";
    }
}