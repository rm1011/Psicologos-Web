<?php
$pagina = basename($_SERVER['PHP_SELF']);
$active1 = 'nav-link';
$active2 = 'nav-link';
$active3 = 'nav-link';
$active4 = 'nav-link';
$active5 = 'nav-link';
$active6 = 'nav-link';
$active7 = 'nav-link';
switch ($pagina) {
    case 'index.php':
        $active1 .= ' activador';
        break;
    case 'institucion.php':
    case 'historia.php':
    case 'decanos.php':
    case 'mision.php':
    case 'cdr.php':
    case 'ptrabajo.php':
        $active2 .= ' activador';
        break;
    case 'tutoria.php':
    case 'tramites.php':
    case 'convenios.php':
    case 'cagrupaciones.php':
    case 'cuniversitarios.php':
        $active3 .= ' activador';
        break;
    case 'cursos.php':
    case 'talleres.php':
    case 'conferencias.php':
    case 'diplomados.php':
        $active4 .= ' activador';
        break;
    case 'noticias.php':
    case 'eventos.php':
    case 'galeria.php':
    case 'calendarizacion.php':
        $active5 .= ' activador';
        break;
    case 'libreria.php':
        $active6 .= ' activador';
        break;
    case 'articulos_colegas.php':
    case 'videos.php':
    case 'ptv_radio.php':
        $active7 .= ' activador';
        break;
}
?>

<style>
    .escudo {
        height: 100px;
    }

    .navbar-nav {
        /* margin-left: auto; */
        /* margin-right: auto; */
        margin-left: auto;
        margin-right: 0;
    }

    .abajo {
        /* background-color: #f4f4f4; */
        /* background: #000; */
        background: var(--color2);
        box-shadow: 0 3px 3px rgba(94, 94, 94, 0.75);
    }

    /* .abajo .navbar-light .navbar-nav .nav-link {
        color: #fff;
    } */
    .abajo .bar-sup2 {
        display: none;
        transition: .3s;
    }

    .abajo .escudo {
        display: block;
    }

    /* .abajo .navbar-nav {
        margin-left: auto;
        margin-right: 0;
    } */

    header .navbar-nav .nav-item .activador {
        /* color: var(--color4); */
        color: #ffc107;
        font-weight: bold;
    }

    #subniveles {
        margin-left: .4rem;
    }

    .dropend .dropdown-toggle::after {
        display: none;
    }

    .dropdown-menu li {
        position: relative;
    }

    .dropdown-menu .submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: -7px;
    }

    .dropdown-menu .submenu-left {
        right: 100%;
        left: auto;
    }

    .dropdown-menu>li:hover {
        background-color: #f1f1f1
    }

    .dropdown-menu>li:hover>.submenu {
        display: block;
    }
</style>

<div id="header-top"></div>
<header class="fixed-top" id="header">

    <div class="bar-sup ">
        <div class="ms-auto">
            <a href="#" class="me-3" target="_blank"><i class="fab fa-facebook"></i><span> Facebook</span></a>
            <a href="#" class="me-3" target="_blank"><i class="fab fa-youtube "></i><span> Youtube</span></a>
            <a href="#" target="_blank" class="me-3"><i class="fas fa-globe-americas"></i><span> Intranet</span></a>
        </div>
    </div>

    <!-- <div class="bar-sup2">
        <a class="navbar-brand animate__animated animate__zoomIn" href="index.php">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div style="justify-content:center;display:flex;margin:auto;">
                            <img src="./public/img/icons/escudo.png" class="mr-3" height="120" id="logo">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div id="text-logo">
                        <h3>COLEGIO DE PSIC??LOGOS DEL PER?? <br>CONSEJO DIRECTIVO REGIONAL I - LIMA</h3>
                    </div>
                </div>
            </div>
        </a>
    </div> -->

    <div id="menu1">
        <nav class="navbar navbar-expand-lg navbar-light border-0">
            <img src="./public/img/icons/escudo.png" class="mr-3 escudo" id="logo">
            <button class="navbar-toggler d-lg-none" type="button" style="background-color:var(--color4);" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color:var(--color4);"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link fw-bold <?= $active1 ?>" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold <?= $active2 ?>" href="" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">NOSOTROS</span><i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="institucion.php">Instituci??n</a>
                            <a class="dropdown-item" href="historia.php">Historia</a>
                            <a class="dropdown-item" href="decanos.php">Decanos</a>
                            <a class="dropdown-item" href="mision.php">Misi??n y Visi??n</a>
                            <a class="dropdown-item" href="cdr.php">CDR</a>
                            <!-- <a class="dropdown-item" href="ptrabajo.php">Plan de Trabajo</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold <?= $active3 ?>" href="" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">SERVICIOS</span><i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <!-- <ul class="navbar-nav dropend">
                                <li class="nav-item dropdown">
                                    <a class="nav-link fw-bold  dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                        <span style="color:black;"> &nbsp;NIVELES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-caret-right"></i> <span>
                                    </a>
                                    <ul id="subniveles" class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" id="submenu" href="inicial.php"> ITEM </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="submenu" href="primaria.php"> ITEM </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="submenu" href="secundaria.php"> ITEM</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
                            <a class="dropdown-item" href="phabilitados.php">Psic??logos Habilitados</a>
                            <a class="dropdown-item" href="tramites.php">Tr??mites</a>
                            <a class="dropdown-item" href="convenios.php">Convenios</a>
                            <a class="dropdown-item" href="cagrupaciones.php">Coordinaci??n de agrupaciones</a>
                            <a class="dropdown-item" href="cuniversitarios.php">Coordinaci??n con universitarios</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold <?= $active4 ?>" href="" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">CENTRO DE CAPACITACI??N</span><i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="cursos.php">Cursos</a>
                            <a class="dropdown-item" href="talleres.php">Talleres</a>
                            <a class="dropdown-item" href="conferencias.php">Conferencias</a>
                            <a class="dropdown-item" href="diplomados.php">Diplomados</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold <?= $active5 ?>" href="" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">ACTIVIDADES</span><i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="noticias.php">Noticias</a>
                            <a class="dropdown-item" href="eventos.php">Eventos</a>
                            <a class="dropdown-item" href="galerias.php">Galer??a</a>
                            <a class="dropdown-item" href="calendarizacion.php">Calendarizaci??n</a>
                        </div>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link <?= $active6 ?>" href="libreria.php">LIBRER??A</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold <?= $active7 ?>" href="" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">PROYECCI??N SOCIAL</span><i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="articulos_colegas.php">Articulos de Colegas</a>
                            <a class="dropdown-item" href="videos.php">Videos</a>
                            <a class="dropdown-item" href="ptv_radio.php">Programas de TV o Radio</a>
                            <a class="dropdown-item" href="entrevista.php">Entrevistas</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</header>


<script>
    var height = document.getElementById('header').clientHeight;
    document.getElementById('header-top').style.height = height + "px";

    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");

        header.classList.toggle("abajo", window.scrollY > 200);
    })
</script>

<script type="text/javascript">
    //	window.addEventListener("resize", function() {
    //		"use strict"; window.location.reload(); 
    //	});


    document.addEventListener("DOMContentLoaded", function() {


        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element) {
            element.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        })



        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

            // close all inner dropdowns when parent is closed
            document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
                everydropdown.addEventListener('hidden.bs.dropdown', function() {
                    // after dropdown is hidden, then find all submenus
                    this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                        // hide every submenu as well
                        everysubmenu.style.display = 'none';
                    });
                })
            });

            document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
                element.addEventListener('click', function(e) {

                    let nextEl = this.nextElementSibling;
                    if (nextEl && nextEl.classList.contains('submenu')) {
                        // prevent opening link if link needs to open dropdown
                        e.preventDefault();
                        console.log(nextEl);
                        if (nextEl.style.display == 'block') {
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }

                    }
                });
            })
        }
        // end if innerWidth

    });
    // DOMContentLoaded  end
</script>