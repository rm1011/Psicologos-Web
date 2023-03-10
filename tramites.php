<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
    <link rel="stylesheet" href="./public/css/niveles.css">
    <link rel="stylesheet" href="./public/css/networks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- CARROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CARROUSEL -->

    <title>COLEGIO DE PSICÓLOGOS DEL PERÚ CONSEJO DIRECTIVO REGIONAL I - LIMA</title>
</head>

<body>

    <style>
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)),
                url('./public/img/web/portada.jpg');
            background-size: cover;
            background-position: center;
            height: 100%;
            padding: 130px 0 180px;
        }

        #portada .page_title {
            font-size: 70px;
            font-weight: bold;
            color: #fff;
        }

        #portada .breadcrumb-item+.breadcrumb-item::before {
            color: white;
        }

        #portada .breadcrumb-item {
            font-size: 26px;
        }

        #portada .breadcrumb-item a {
            color: #fff;
            font-size: 26px;
        }

        #portada .breadcrumb-item:hover a {
            color: var(--color2);
        }

        .texto {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        /* .texto ul li {
            list-style: none;
        } */

        /* .texto ul li i {
            color: var(--color1);
            margin-right: 5px;
        } */


        /* para ocultar los iconos por defecto*/
        .accordion-button:not(.collapsed)::after {
            content: "";
            background-image: url("");
        }

        .accordion-button::after {
            width: 0px;
            height: 0px;
            content: "";
            background-image: url("");
            background-size: 0px;
        }

        /* color y tamaño en modo activo */

        .accordion-button:not(.collapsed) div.boton-icono {
            color: var(--color1);
            font-size: 20px;
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        /* color y tamaño */

        .accordion-button div.boton-icono {
            color: var(--color1);
            font-size: 20px;
            transition: -webkit-transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
        }

        .accordion-button {
            font-weight: bold;
            color: var(--color2);
            font-size: 17.5px;
        }

        .accordion-button:hover {
            color: var(--color1);
        }

        .accordion-flush .accordion-item {
            border-bottom: 0;
        }

        .accordion-button:not(.collapsed) {
            color: var(--color1);
        }
    </style>

    <?php include_once './partials/header2.php'; ?>

    <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="page_title">Servicios</h1>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Trámites</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container texto">
        <div class="row justify-content-between">
            <!-- <div class="col-lg-5">
                <img src="./public/img/web/tramites.jpg" width="100%" alt="">
            </div> -->
            <div class="col-lg">
                <div>
                    <h3 class="mb-4 titulo">REQUISITOS PARA LOS SIGUIENTES TRÁMITES</h3>
                    <div id="acordiondesafios" class="col-lg" style="background-color:white;">
                        <div class="accordion accordion-flush mx-5" id="accordionFlushExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush1">
                                    <button class="accordion-button bg-body collapsed" style="background-color: #f4f5f7;border-bottom: 2px solid var(--color1);" type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false" aria-controls="item1">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">PAGO DE APORTACIONES</div>
                                    </button>
                                </h2>
                                <div id="item1" class="accordion-collapse collapse" aria-labelledby="flush1" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p class="fw-bold"> Presencial: </p>
                                                <p>Presentar su DNI o carné de extranjería en Jr. Camilo Carrillo 164 Jesús María
                                                    Tener su código de colegiatura y realizar sus aportes en caja.</p>

                                                <p class="fw-bold"> Online:</p>
                                                <p>Solicitar su estado de cuenta a través del correo electrónico tesoreria@cpsplima.pe
                                                    o al whatsapp 986776409.</p>
                                                <p>Realizar el pago por transferencia o depósito al Banco Scotiabank
                                                    a la cta corriente N° 0009840656 o al CCI 00917000000984065624 Colegio de Psicólogo del
                                                    Perú -Consejo Directivo Regional I Lima, luego enviar el recibo e indicar lo que solicita.
                                                    Se le remitirá a la brevedad su boleta de pago.</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush2">
                                    <button class="accordion-button collapsed bg-body" style="background-color: #f4f5f7;border-bottom: 2px solid var(--color1);" type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false" aria-controls="item2">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">COLEGIATURA</div>
                                    </button>
                                </h2>
                                <div id="item2" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p class="fw-bold">Entregar</p>
                                                <ol>
                                                    <li>Solicitud de Inscripción (Formato 1).</li>
                                                    <li>Ficha de datos (Formato 2).</li>
                                                    <li>Declaración Jurada de no tener antecedentes penales (Formato 3).</li>
                                                    <li>Declaración Jurada de la veracidad de los documentos presentados (Formato 4).</li>
                                                    <li>Tres (3) fotografías tamaño pasaporte y fondo blanco.</li>
                                                    <li>Consentimiento informado (Se entrega en la sede).</li>
                                                </ol>

                                                <p class="fw-bold">Presentar</p>
                                                <ol>
                                                    <li>Documento de Identidad (original y una copia) (DNI) / (CE).</li>
                                                    <li>Certificado de Antecedentes Penales.</li>
                                                    <li>Título profesional (original y 2 copias).</li>
                                                    <li>Diploma de Bachiller (original y 2 copias).</li>
                                                    <li>Certificado de estudios universitarios (original y 2 copias).</li>
                                                    <li>Voucher o boleta de pago ( se realiza al momento de dejar sus documentos).</li>
                                                </ol>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush3">
                                    <button class="accordion-button collapsed bg-body" style="background-color: #f4f5f7;border-bottom: 2px solid var(--color1);" type="button" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="false" aria-controls="item3">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">CARNÉ DE COLEGIADO</div>
                                    </button>
                                </h2>
                                <div id="item3" class="accordion-collapse collapse" aria-labelledby="flush3" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <ol>
                                                    <li>Costo : S/ 25.00 soles.</li>
                                                    <li>01 foto tamaño pasaporte fondo blanco virtual o impresa.</li>
                                                    <li>Firma, virtual o impresa.</li>
                                                    <li>Llenar datos solicitados:</li>
                                                    <ul>
                                                        <li>Nombres y apellidos completos.</li>
                                                        <li>Código de colegiatura.</li>
                                                        <li>N° de DNI o carné de extranjería.</li>
                                                        <li>N° de celular.</li>
                                                        <li>Tipo de sangre.</li>
                                                    </ul>
                                                </ol>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush4">
                                    <button class="accordion-button collapsed bg-body" style="background-color: #f4f5f7;border-bottom: 2px solid var(--color1);" type="button" data-bs-toggle="collapse" data-bs-target="#item4" aria-expanded="false" aria-controls="item4">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">CONSTANCIA DE HABILITACIÓN</div>
                                    </button>
                                </h2>
                                <div id="item4" class="accordion-collapse collapse" aria-labelledby="flush4" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <ol>
                                                    <li>Costo : S/ 10.00 soles Vigencia 3 meses.</li>
                                                    <li>Estar al día en el pago de sus cuotas hasta el mes que solicita la constancia.</li>
                                                    <li>Se puede solicitar en forma presencial o virtual.</li>
                                                </ol>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush5">
                                    <button class="accordion-button collapsed bg-body" style="background-color: #f4f5f7;border-bottom: 2px solid var(--color1);" type="button" data-bs-toggle="collapse" data-bs-target="#item5" aria-expanded="false" aria-controls="item5">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">FORMATO PSICOLÓGICO</div>
                                    </button>
                                </h2>
                                <div id="item5" class="accordion-collapse collapse" aria-labelledby="flush5" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <ol>
                                                    <li>Costo : S/ 10.00 soles por hoja.</li>
                                                    <li>Esta solicitud tiene que ser en forma presencial o si envía un representante acompañar una carta de poder simple.</li>
                                                </ol>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush6">
                                    <button class="accordion-button collapsed bg-body" style="background-color: #f4f5f7;border-bottom: 2px solid var(--color1);" type="button" data-bs-toggle="collapse" data-bs-target="#item6" aria-expanded="false" aria-controls="item6">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">CONSTANCIA DE ESTAR COLEGIADO</div>
                                    </button>
                                </h2>
                                <div id="item6" class="accordion-collapse collapse" aria-labelledby="flush6" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <ol>
                                                    <li>Costo : S/ 10.00 soles</li>
                                                    <li>Estar al día en sus mensualidades y hacer el pago correspondiente.</li>
                                                </ol>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush7">
                                    <button class="accordion-button collapsed bg-body" style="background-color: #f4f5f7;border-bottom: 2px solid var(--color1);" type="button" data-bs-toggle="collapse" data-bs-target="#item7" aria-expanded="false" aria-controls="item7">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">DENUNCIA ANTE EL TRIBUNAL DE HONOR</div>
                                    </button>
                                </h2>
                                <div id="item7" class="accordion-collapse collapse" aria-labelledby="flush7" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <ol>
                                                    <li>Costo : S/ 50.00 soles</li>
                                                    <li>Presentar la denuncia en original y una copia, debidamente sustentada, con fotocopia de DNI de la persona que presenta la queja.</li>
                                                </ol>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush8">
                                    <button class="accordion-button collapsed bg-body" style="background-color: #f4f5f7;border-bottom: 2px solid var(--color1);" type="button" data-bs-toggle="collapse" data-bs-target="#item8" aria-expanded="false" aria-controls="item8">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">CONSTANCIA DE INFORMACIÓN DE PSICÓLOGO HABILITADO</div>
                                    </button>
                                </h2>
                                <div id="item8" class="accordion-collapse collapse" aria-labelledby="flush8" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <ol>
                                                    <li>Costo : S/ 25.00 soles</li>
                                                    <li>Esta solicitud la puede presentar cualquier persona natural interesada de obtener información del estado de habilitación de un psicólogo.</li>
                                                    <li>Presentar un escrito con copia fotostática del DNI del solicitante.</li>
                                                </ol>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush9">
                                    <button class="accordion-button collapsed bg-body" style="background-color: #f4f5f7;border-bottom: 2px solid var(--color1);" type="button" data-bs-toggle="collapse" data-bs-target="#item9" aria-expanded="false" aria-controls="item9">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">AUTENTICAR DIVERSOS DOCUMENTOS</div>
                                    </button>
                                </h2>
                                <div id="item9" class="accordion-collapse collapse" aria-labelledby="flush9" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <ol>
                                                    <li>Costo: S/25.00 soles</li>
                                                    <li>Los colegiados pueden presentar constancias y/o certificados para ser autenticados por el CDR I Lima. </li>
                                                </ol>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <p class="mt-5 text-center">Para más información contactarnos a <b> 01 3305390 </b> </p>
                </div>
            </div>
        </div>
    </section>


    <?php include_once './partials/footer.php'; ?>

    <!-- CARROUSEL -->
    <script>
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                800: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });
    </script>

    <script type="text/javascript">
        let modal = new bootstrap.Modal(document.getElementById('myModal'), );
        modal.show();
    </script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="./public/js/hubslider.min.js"></script>
    <script>
        $('.hub-slider-slides ul').hubSlider({
            selector: $('li'),
            button: {
                next: $('.hub-slider-arrow_next'),
                prev: $('.hub-slider-arrow_prev')
            },
            transition: '0.9s',
            startOffset: 30,
            auto: true,
            time: 3 // secondly
        });
    </script>

</body>



</html>