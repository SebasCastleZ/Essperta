// alert("hola")
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-button');
    const menu = document.getElementById('container-listado');
    
    menuToggle.addEventListener('click', function() {
        menu.classList.toggle('mostrar');
    });
});

console.log(menu)