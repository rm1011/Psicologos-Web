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

        #eventos {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        /* .lista .card {
            transition: transform .3s ease-in-out;
        } */

        /* .lista .card:hover {
            transform: scale(1.06);
        } */

        #eventos .item {
            /* margin-top: 3rem; */
            padding-top: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #000;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #eventos .date {
            text-align: center;
            border-right: 1px solid #000;
        }

        #eventos .date h3 {
            font-size: 70px;
            color: var(--color1);
        }

        #eventos .date h6 {
            color: var(--color1);
            font-weight: 600
        }

        #eventos .text a {
            font-size: 24px;
            color: var(--color2);
            font-weight: 600;
            /* font-family: 'Roboto Slab', serif; */
        }

        #eventos .text p {
            margin-top: 1rem;
            color: var(--color7);
        }

        #eventos .imagen img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .list-group .list-group-item:hover {
            background: var(--color2);
            /* color: #fff; */
        }
    </style>

    <?php include_once './partials/header2.php'; ?>

    <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="page_title">Actividades</h1>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Eventos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container" id="eventos">
        <div class="row justify-content-between">

            <div class="col-lg-9 my-4 pe-md-5">
                <div class="row item">
                    <div class="col-md-3">
                        <div class="date">
                            <h3>01</h3>
                            <h6>Septiembre</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text">
                            <a href="#">CONFERENCIA: ORIENTACIÓN VOCACIONAL Y PROFESIONAL</a>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Rem, non et illo voluptatem voluptatibus nulla aut quam unde
                                pariatur porro atque cumque quas
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="imagen">
                            <img src="./public/img/galeria/evento1.png" alt="evento">
                        </div>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-3">
                        <div class="date">
                            <h3>01</h3>
                            <h6>Septiembre</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text">
                            <a href="#">CONFERENCIA: ORIENTACIÓN VOCACIONAL Y PROFESIONAL</a>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Rem, non et illo voluptatem voluptatibus nulla aut quam unde
                                pariatur porro atque cumque quas
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="imagen">
                            <img src="./public/img/galeria/evento1.png" alt="evento">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-3">
                <h4 class="mb-3">Actividades</h4>
                <div class="list-group shadow-sm">
                    <a href="noticias.php" class="list-group-item">
                        <i class="far fa-folder-open"></i>&nbsp;&nbsp; Noticias</a>
                    <a href="galeria.php" class="list-group-item ">
                        <i class="far fa-folder-open"></i>&nbsp;&nbsp; Galería </a>
                    <a href="calendarizacion.php" class="list-group-item ">
                        <i class="far fa-folder-open"></i>&nbsp;&nbsp; Calendarización </a>
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