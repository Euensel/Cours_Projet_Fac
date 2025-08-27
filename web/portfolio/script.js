

let menu_icon = document.getElementById('menu-icon');
let navbar = document.getElementById('nav-barre');

// Ajoute un écouteur d'événement au clic
menu_icon.addEventListener('click', function(a) {
    a.stopPropagation();
    menu_icon.style.display = "none";
    navbar.classList.add("active");
    navbar.style.visibility="visible";

});
