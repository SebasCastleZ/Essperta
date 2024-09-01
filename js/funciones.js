// alert("hola")
document.addEventListener('DOMContentLoaded', function() {
  // Selecciona todos los botones del menú usando la clase
  const menuToggles = document.querySelectorAll('.menu-button');
  const menu = document.getElementById('container-listado');
  const overlay = document.getElementById('overlay-nav');
  
  menuToggles.forEach(menuToggle => {
      menuToggle.addEventListener('click', function() {
          menu.classList.toggle('mostrar');
          overlay.classList.toggle('mostrar');
          menuToggles.forEach(btn => {
              btn.classList.toggle('xcambio');
          });
      });
  });
});

// Función para cambiar el color del fondo
function cambiarFondo() {
    // Obtén el valor del scroll en la vertical
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
  
    // Obtén el elemento header o cualquier otro elemento al que quieras cambiar el color de fondo
    const header = document.getElementById('header');
    const texto = document.querySelectorAll('#texto-listado');

    // Verifica si el scroll está en la parte superior
    if (scrollTop === 0) {
      // Si está en la parte superior, puedes establecer el color original o cualquier color que prefieras
      header.style.backgroundColor = '#ffffff00';

      texto.forEach(texto => {
        texto.style.color = '#ffffff';
      });
    } else {
      // Si no está en la parte superior, cambia el color de fondo
      header.style.transition='all 0.5s ease-in';
      header.style.backgroundColor = '#ffffff';
      texto.forEach(texto => {
        texto.style.color = '#000000';
      });
    }
  }
  
  // Escucha el evento scroll para ejecutar la función cuando el usuario se desplaza
  window.addEventListener('scroll', cambiarFondo);
  