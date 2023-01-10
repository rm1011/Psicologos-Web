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

        .misionVision {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        .misionVision img {
            width: 100%;
            height: 100%;
            /* border-radius: 20px; */
            /* box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 50%); */
        }

        .misionVision .mision {
            background: red;
            padding: 60px 100px;
            display: flex;
            align-items: center;
            background: #FFE79E;
        }

        .misionVision .vision {
            background: red;
            padding: 60px 100px;
            display: flex;
            align-items: center;
            background: #D0F3FF;
        }

        .misionVision p {
            line-height: 2;
        }

        .valores {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        .valores .item {
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 35%);
            transition: transform .6s;
        }

        .valores .item:hover {
            transform: scale(1.10);
        }

        .valores .item i {
            color: #192772;
        }

        .valores .item .titulo {
            /* font-size: 24px; */
            text-align: center;
            margin-top: 18px;
        }
    </style>

    <?php include_once './partials/header2.php'; ?>

    <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="page_title">Nosotros</h1>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Misión y Visión</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container misionVision">
        <div class="row justify-content-between">
            <div class="col-lg-6 px-0">
                <img src="./public/img/web/mision.jpg" alt="">
            </div>

            <div class="col-lg-6 mision">
                <div>
                    <h3 class="mb-4 text-center">Misión</h3>
                    <p class="text-justify">
                        Somos una institución que ejerce la representación oficial y la defensa de la profesión del psicólogo; promoviendo el avance de la psicología y la superación profesional de los miembros de la orden, mediante el desarrollo de actividades científicas, técnicas y culturales.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-6 vision">
                <div>
                    <h3 class="mb-4 text-center">Visión</h3>
                    <p class="text-justify">
                        Ser una institución reconocida como ente rector de la salud psicológica en la Región I – Lima, Callao, Ica, que brinda una atención de calidad, calidez a los miembros de la orden y a la sociedad.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 px-0">
                <img src="./public/img/web/vision.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="container valores">
        <div class="row" style="margin-bottom: 3rem;">
            <div class="col">
                <h2 class="title">VALORES</h2>
                <div class="line"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 px-3">
                <div class="item">
                    <i class="fas fa-balance-scale fa-3x"></i>
                    <h4 class="titulo">Legalidad</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-3">
                <div class="item">
                    <i class="fas fa-search fa-3x"></i>
                    <h4 class="titulo">Transparencia</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-3">
                <div class="item">
                    <i class="fas fa-user-check fa-3x"></i>
                    <h4 class="titulo">Calidad en el servicio</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-3">
                <div class="item">
                    <i class="fas fa-hand-holding-heart fa-3x"></i>
                    <h4 class="titulo">Responsabilidad social</h4>
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