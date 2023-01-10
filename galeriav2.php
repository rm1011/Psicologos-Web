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
    <link rel="stylesheet" href="./public/css/venobox.css">
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
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/venobox.js"></script>
    <script src="./public/js/vue.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>

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

        #content-grid {
            columns: 2;
            column-gap: 6px;
        }

        #content-grid>div.img-links {
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            break-inside: avoid;
            margin-bottom: 6px;
        }

        #content-grid img {
            height: auto;
            object-fit: cover;
        }



        .boton {
            background: var(--color2);
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            transition: .3s all;
        }

        .boton:hover {
            color: #fff;
            background: var(--color1);
            transform: scale(1.08);
        }
    </style>

    <?php include_once './partials/header2.php'; ?>

    <!-- <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="page_title">Galería</h1>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Galerías</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <br><br><br>

    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="text-center">
                    <h2 class="fw-bold" style="color:var(--color1);">Galería - COLEGIATURA-DICIEMBRE-2022</h2>
                </div>
                <hr style="color:var(--color2);">
                <div id="content-grid" class="pt-4">
                    <a class="img-links" data-gall="gallery01" title="Galería - COLEGIATURA-DICIEMBRE-2022" href="./public/img/galeria/colegiatura1.jpg"><img src="./public/img/galeria/colegiatura1.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="Galería - COLEGIATURA-DICIEMBRE-2022" href="./public/img/galeria/colegiatura2.jpg"><img src="./public/img/galeria/colegiatura2.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="Galería - COLEGIATURA-DICIEMBRE-2022" href="./public/img/galeria/colegiatura3.jpg"><img src="./public/img/galeria/colegiatura3.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="Galería - COLEGIATURA-DICIEMBRE-2022" href="./public/img/galeria/colegiatura4.jpg"><img src="./public/img/galeria/colegiatura4.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="Galería - COLEGIATURA-DICIEMBRE-2022" href="./public/img/galeria/colegiatura5.jpg"><img src="./public/img/galeria/colegiatura5.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="Galería - COLEGIATURA-DICIEMBRE-2022" href="./public/img/galeria/colegiatura6.jpg"><img src="./public/img/galeria/colegiatura6.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="Galería - COLEGIATURA-DICIEMBRE-2022" href="./public/img/galeria/colegiatura7.jpg"><img src="./public/img/galeria/colegiatura7.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="Galería - COLEGIATURA-DICIEMBRE-2022" href="./public/img/galeria/colegiatura8.jpg"><img src="./public/img/galeria/colegiatura8.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="Galería - COLEGIATURA-DICIEMBRE-2022" href="./public/img/galeria/colegiatura9.jpg"><img src="./public/img/galeria/colegiatura9.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="Galería - COLEGIATURA-DICIEMBRE-2022" href="./public/img/galeria/colegiatura10.jpg"><img src="./public/img/galeria/colegiatura10.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="Galería - COLEGIATURA-DICIEMBRE-2022" href="./public/img/galeria/colegiatura11.jpg"><img src="./public/img/galeria/colegiatura11.jpg" class="mb-2" width="100%"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4 d-flex justify-content-center">
                <a href="galerias.php" class="boton mx-auto">
                    Regresar
                </a>
            </div>
        </div>
    </section>

    <br><br><br>

    <?php include_once './partials/footer.php'; ?>

    <script>
        new VenoBox({
            selector: '.img-links',
            numeration: true,
            infinigall: true,
            navSpeed: 300,
        });
    </script>

    <!-- <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/venobox.js"></script>
    <script src="./public/js/vue.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script> -->

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