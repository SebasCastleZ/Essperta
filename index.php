<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/funciones.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limpieza A Fondo</title>
</head>
<body>
    <header class=" position-fixed z-3 w-100" id="header">
        <div class="contanier-header z-2 d-flex">
                <a href="index.html">
                <div class="logo">
                <img src="imgs/Logo-Essperta.png" alt="Logo">
                </div>
                </a>
            <div class="w-100 h-100 z-2">
                <div class="h-100 w-100">
                    <a class="menu-button nav_link w-100 h-100 m-left" id="menu-button"> </a>
                </div>
                <span class="overlay-nav w-100" id="overlay-nav"></span>
                <nav>
                    <div class="container-listado m-auto w-100 d-flex z-2" id="container-listado">
                        <ul class="listado d-flex w-100 ">
                            <li>
                                <div>
                                    <a class="menu-button" id="menu-button"> </a>
                                </div>
                            </li>
                            <li class="list-style fw-700"><a href="index.html" class="texto-listado text-decoration rojo">INICIO</a></li>
                            <li class="list-style fw-700" ><a href="espiral_inox.html" class="texto-listado text-decoration blanco" id="texto-listado">NOSOTROS</a></li>
                            <li class=" nav_link list-style fw-700 producto-nav">
                                <a class="dropdown d-flex texto-listado d-flex align-items-center position-relative blanco" id="texto-listado">PRODCUTOS 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;" class="down">
                                        <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
                                    </svg>
                                    <input type="checkbox" class="menu_check" title="desplegar"/>
                                    </a> 
                                    <!-- drop-content -->
                                    <div class="submenu d-flex position-absolute text-uppercase m-0 white fw-bold">
                                        <!-- dropdown-sub -->
                                        <ul class="submenu_list d-flex flex-column">
                                            <!-- dropdown_li  -->
                                            <li class="d-flex align-content-center align-items-center">
                                                <div class="img-producto">
                                                    <img class="w-100" src="imgs/producto.jpg" alt="">
                                                </div>
                                                <span>Espiral de acero inaxidable</span>
                                            </li>
                                            <li class="d-flex align-content-center align-items-center">
                                                <div class="img-producto">
                                                    <img class="w-100" src="imgs/dona-metalica.webp" alt="">
                                                </div>
                                                <span>Dona de acero galvanizado</span>
                                            </li>
                                            <li class="d-flex align-content-center align-items-center">
                                                <div class="img-producto">
                                                    <img class="w-100" src="imgs/dona-cobrizada.webp" alt="">
                                                </div>
                                                <span>Dona de acero cobrizado</span>
                                            </li>
                                        </ul>
                                        <ul class="submenu_list d-flex flex-column">
                                            <li class="d-flex align-content-center align-items-center">
                                                <div class="img-producto">
                                                    <img class="w-100" src="imgs/espiral_acero.webp" alt="">
                                                </div>
                                                <span>Yaali Espiral de acero inoxidable</span>
                                            </li>
                                            <li class="d-flex align-content-center align-items-center">
                                                <div class="img-producto">
                                                    <img class="w-100" src="imgs/espirales-essperta.webp" alt="">
                                                </div>
                                                <span>3 Paquetes de 2 piezas Fibra Espiral Metálica</span>
                                            </li>
                                        </ul>
                                    </div>
                            </li>
                            <li class="list-style fw-700" ><a href="acerro_cobrizado.html" class="texto-listado text-decoration blanco" id="texto-listado">DISTRIBUIDORES</a></li>
                            <li class=" nav_link list-style fw-700 producto-nav">
                                <a class="dropdown d-flex texto-listado d-flex align-items-center position-relative blanco" id="texto-listado">Idioma 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;" class="down">
                                        <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
                                    </svg>
                                    <input type="checkbox" class="menu_check" title="desplegar"/>
                                    </a> 
                                    <!-- drop-content -->
                                    <div class="submenu d-flex position-absolute text-uppercase m-0 white fw-bold">
                                        <!-- dropdown-sub -->
                                        <ul class="submenu_list d-flex flex-column">
                                            <!-- dropdown_li  -->
                                            <li class="d-flex align-content-center align-items-center">
                                                <a href="#"  class="fw-700 texto-listado text-decoration blanco d-flex align-items-center" id="texto-listado">
                                                <img src="imgs/flag.png" alt="">
                                                <span>English</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="btn-compra">
                <a class="texto-listado text-decoration blanco fw-700"> COMPRAR AQUI</a>
            </div>
            <div class="m-auto">
                <ul class="english list-style">
                    <li>
                        <a href="#"  class="fw-700 texto-listado text-decoration blanco d-flex align-items-center" id="texto-listado">
                            <img src="imgs/flag.png" alt="">
                            <span>English</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
    </header>
    <?php    
    require('paginas/header.php');
    ?>

    <!-- seccion one-shoot  -->
    <main class="w-100 position-relative">
        <div class="one-shoot w-100 position-relative d-flex flex-column m-auto">
                <div class=" container-shoot h-100 d-flex ">
                    <div class="d-flex h-100 m-auto conatainer-elementos">
                        <div class="text-shoot rojo  w-100 ">
                            <div class="letras-shoot d-flex flex-column">
                            <div class=" fs-3 fw-800">PARA UNA</div>
                            <div class=" fs-1 fw-800">LIMPIEZA </div>
                            <div class=" fs-1 fw-800"> A FONDO</div>
                            </div>
                            <p class="blanco fs-3 poppins-regular">Essperta &#174 fibras de acero.</p>
                            <!-- botones -->
                            <div class="conatainer-buttons d-flex">
                                <a href="#" class="blanco text-decoration">
                                    VER TODOS LOS PRODUCTOS
                                </a>
                                <a href="#" class="blanco text-decoration">
                                    COMPRAR EN LÍNEA
                                </a>
                            </div>
                        </div>
                        <div class="imagen-dona z-2">
                            <img class="position-relative w-100" src="imgs/dona-de-acero.png" alt="">
                        </div>
                    </div>
                </div>
        </div>
    </main>

    <!-- seccion roja -->
    <section>
        <div class="container-rojo d-flex m-auto">
            <p class="blanco">
                NUESTRAS FIBRAS DE ACERO ESSPERTA ESTÁN HECHAS <br>
                CUIDADOSAMENTE PARA DARTE EL RENDIMNETO QUE <br>
                NECESITAS EN TU COCINA.
            </p>
        </div>
    </section>
<!-- seccion prodcutos -->
    <section>
    <div class="container-productos d-flex">
        <div class="container-tamano-productos">
            <p class="rojo text-center fs-2">NUESTROS PRODUCTOS</p>
            <div class="productos d-grid">
                <article class="d-flex gap-20">
                    <div class="d-flex my-30 flex-column h-100 justify-content-between">
                    <a class="d-flex m-auto position-relative text-decoration-none flex-column text-center px-10 link-productos" href="paginas/profducto_1.html">
                        <div class="m-left m-right">
                            <img src="imgs/producto.jpg" alt="">
                        </div>
                    <p class="mb-25 text-center fw-700">ESPIRAL DE ACERO INOXIDABLE</p>
                    </a>
                    <div class="boton-producto">
                        <a href="#">VER PRODUCTO</a>
                    </div>
                    </div>
                </article>
                <article class="d-flex gap-20">
                    <div class="d-flex my-30 flex-column h-100 justify-content-between">
                    <a class="d-flex m-auto position-relative text-decoration-none flex-column text-center px-10 link-productos" href="paginas/profducto_2.html">
                        <div class="m-left m-right">
                            <img src="imgs/dona-metalica.webp" alt="">
                        </div>
                    <p class="mb-25 text-center fw-700">DONA DE ACERO GALVANIZADO</p>
                    </a>
                    <div class="boton-producto">
                        <a href="paginas/profducto_2.html">VER PRODUCTO</a>
                    </div>
                    </div>
                </article>
                <article class="d-flex gap-20">
                    <div class="d-flex my-30 flex-column h-100 justify-content-between">
                    <a class="d-flex m-auto position-relative text-decoration-none flex-column text-center px-10 link-productos" href="paginas/profducto_3.html">
                        <div class="m-left m-right">
                            <img src="imgs/dona-cobrizada.webp" alt="">
                        </div>
                    <p class="mb-25 text-center fw-700">DONA DE ACERO COBRIZADO</p>
                    </a>
                    <div class="boton-producto">
                        <a href="paginas/profducto_3.html">VER PRODUCTO</a>
                    </div>
                    </div>
                </article>
                <article class="d-flex gap-20">
                    <div class="d-flex my-30 flex-column h-100 justify-content-between">
                    <a class="d-flex m-auto position-relative text-decoration-none flex-column text-center px-10 link-productos" href="paginas/profducto_4.html">
                        <div class="m-left m-right">
                            <img src="imgs/espiral_acero.webp" alt="">
                        </div>
                    <p class="mb-25 text-center fw-700">YAALI ESPIARAL DE ACERO INOXIDABLE</p>
                    </a>
                    <div class="boton-producto">
                        <a href="paginas/profducto_4.html">VER PRODUCTO</a>
                    </div>
                    </div>
                </article>
                <article class="d-flex gap-20">
                    <div class="d-flex my-30 flex-column h-100 justify-content-between">
                    <a class="d-flex m-auto position-relative text-decoration-none flex-column text-center px-10 link-productos" href="paginas/profducto_5.html">
                        <div class="m-left m-right">
                            <img src="imgs/espirales-essperta.webp" alt="">
                        </div>
                    <p class="mb-25 text-center fw-700">3 PAQUETES DE 2 PIEZAS FIBRAS ESPIRAL METÁLICA</p>
                    </a>
                    <div class="boton-producto">
                        <a href="#">VER PRODUCTO</a>
                    </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    </section>

    <!-- footer  -->
    <footer class="position-relative w-100">
        <div class="back-footer-top position-relative w-100">
            <div class="footer-top d-flex w-100 position-relative m-auto flex-column">
                <div class="d-flex gap-20 w-100 justify-content-between">
                    <div class="logo-footer d-flex justify-content-start container-foot-top pb-20">
                        <a href="index.html">
                            <img class=" w-100" src="imgs/logo-footer.svg" alt="Logo">
                        </a>
                    </div>
                    <div class="d-flex w-100 info-footer flex-column pb-20">
                        <h3 class=" fs-3 fw-bold">Contáctanos</h3>
                        <div class="text-end mb-25">
                        <div>Tel:55 5795 1103</div>
                        <div>Email:essperta@jamed.com.mx</div>
                        </div>
                        <div class="d-flex w-100 justify-content-end">
                            <a href="#" class="icono mr-10">
                                <img src="imgs/facebook.webp" class="w-100" alt="#">
                            </a>
                            <a href="#" class="icono mr-10">
                                <img src="imgs/x.webp" class="w-100" alt="">
                            </a>
                            <a href="#" class="icono">
                                <img src="imgs/instagram.webp"class="w-100" alt="">
                            </a>
                        </div>
                </div>
            </div>
            </div>
        </div>
        <div class="footer-bottom d-flex w-100">
            <div class="d-flex w-100">
                <p>
                    
                    © 2022 Soflyy. All rights reserved.
                </p>
                <p>
                    Políticas de privacidad
                </p>
            </div>
        </div>
    </footer>
</body>
</html>