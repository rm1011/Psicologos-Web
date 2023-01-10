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
            /* margin-bottom: 5rem; */
        }

        .texto .titulo {
            font-size: 26px;
            text-align: center;
        }

        #NColegiatura {
            /* margin-top: 3rem; */
            background: #EEEEEE;
            padding: 2rem 1rem;
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 25%);
            border-radius: 20px;
            transition: .3s all;
        }

        #NColegiatura:hover {
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 45%);
        }

        #NColegiatura .boton {
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 25%);
            background: var(--color2);
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            border: 0;
            transition: .3s all;
        }

        #NColegiatura .boton:hover {
            background: var(--color1);
            transform: scale(1.08);
        }

        #APaterno {
            background: #EEEEEE;
            padding: 2rem 1rem;
            margin-top: 5rem;
            border-radius: 20px;
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 25%);
            transition: .3s all;
        }

        #APaterno:hover {
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 45%);
        }

        #APaterno .boton {
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 25%);
            background: var(--color2);
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            border: 0;
            transition: .3s all;
        }

        #APaterno .boton:hover {
            background: var(--color1);
            transform: scale(1.08);
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
                                <li class="breadcrumb-item text-white">Psicologos Habilitados</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container texto">
        <div class="row">
            <div class="col">
                <p class="titulo mb-3"> Verifique online si su <b> Psicólogo </b> se encuentra <b> HABILITADO. </b> </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 my-auto">
                <div>
                    <form id="NColegiatura">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-10 my-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="NColegiatura" type="number" required="" class="form-control form-control-lg" placeholder="Buscar por N° de Colegiatura:">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-10 col-md-6 my-4 d-flex justify-content-center align-items-center">
                                <button type="submit" class="boton">
                                    Buscar
                                </button>
                            </div>
                        </div>
                    </form>

                    <form id="APaterno">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-10 col-md-6 my-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="APaterno" type="text" required="" class="form-control form-control-lg" placeholder="Buscar por Apellido Paterno:">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-10 col-md-6 my-4 d-flex justify-content-center align-items-center">
                                <button type="submit" class="boton">
                                    Buscar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="./public/img/web/phabilitados.png" width="100%">
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