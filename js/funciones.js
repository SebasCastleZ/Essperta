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
    const flecha = document.querySelector('.down');

    // Verifica si el scroll está en la parte superior
    if (scrollTop === 0) {
      // Si está en la parte superior, puedes establecer el color original o cualquier color que prefieras
      header.style.backgroundColor = '#ffffff00';
      flecha.style.fill = '#fff';

      texto.forEach(texto => {
        texto.style.color = '#ffffff';
      });
    } else {
      // Si no está en la parte superior, cambia el color de fondo
      header.style.transition='all 0.5s ease-in';
      flecha.style.fill = '#000000';
      header.style.backgroundColor = '#ffffff';
      texto.forEach(texto => {
        texto.style.color = '#000000';
      });
    }
  }
  
  

  var scrollPos = 0;
  
function cambiarMenu(){
  header = document.getElementById("header");
    if ((document.body.getBoundingClientRect()).top > scrollPos)
      header.style.top = "0px";
    else
    header.style.top = "-120px";
    scrollPos = (document.body.getBoundingClientRect()).top;
  };


  //funcion progress bar scroll

  let calcScrollValue = () => {
    let scrollProgress = document.getElementById("progress");
    let progressValue = document.getElementById("progress-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight =
      document.documentElement.scrollHeight -
      document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);
    if (pos > 100) {
      scrollProgress.style.display = "grid";
    } else {
      scrollProgress.style.display = "none";
    }
    scrollProgress.addEventListener("click", () => {
      document.documentElement.scrollTop = 0;
    });
    scrollProgress.style.background = `conic-gradient(#e2211c  ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
  };
  
  window.onscroll = calcScrollValue;
  window.onload = calcScrollValue;
// cambio del estado de menu
window.addEventListener('scroll',cambiarMenu);
//llamado de funciones
window.addEventListener('scroll', cambiarFondo);