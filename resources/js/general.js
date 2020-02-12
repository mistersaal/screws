document.addEventListener("DOMContentLoaded", function(event) {
    let navbarBurger = document.getElementById('navbar-burger');
    let navbarMenu = document.getElementById('navbar-menu');

    navbarBurger.addEventListener('click', function (e) {
        navbarMenu.classList.toggle('is-active');
        navbarBurger.classList.toggle('is-active');
    }, false);
});
