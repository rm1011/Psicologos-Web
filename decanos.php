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

        #fotos {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        #fotos .item {
            background: #F2F6FF;
            border-radius: 10px;
            padding: 40px 30px;
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 20%);
            transition: .3s all;
            height: 380px;
            max-height: 400px;
        }

        #fotos .item:hover {
            background: var(--color2);
            border-radius: 10px;
            padding: 40px 30px;
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 40%);
        }

        #fotos .item .imgC {
            width: 160px;
            height: 160px;
            margin: 0 auto 40px;
            /* background: #fff; */
        }

        #fotos .item img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            background: #fff;
            /* border: 6px solid #fff; */
            transition: .3s all;
        }

        #fotos .item:hover img {
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 40%);
            transform: scale(1.04);
        }

        #fotos .item .text {
            text-align: center;
        }

        #fotos .item:hover .text .nombre {
            color: #fff;
        }

        #fotos .item .text .nombre {
            font-weight: bold;
            margin-bottom: 10px;
        }

        #fotos .item .text .periodo {
            font-weight: 600;
            color: #999;
        }

        #fotos .item:hover .text .periodo {
            color: #fff;
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
                                <li class="breadcrumb-item text-white">Decanos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container" id="fotos">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/manuel_silva.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Manuel Silva Aguilar</h4>
                                    <h5 class="periodo">Decano Actual</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/alejandro_velez.png" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Alejandro Vélez Arana</h4>
                                    <h5 class="periodo">Decano Periodo 2018 - 2022</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/maria_elena.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">María Elena Zuñiga Villegas</h4>
                                    <h5 class="periodo">Decana Bienio 2016 – 2018</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/noemi_adelaida.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Noemi Adelaida Sotelo Lopez</h4>
                                    <h5 class="periodo">Decana Bienio 2012 – 2014</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/jaime_ramiro.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Jaime Ramiro Aliaga Tovar</h4>
                                    <h5 class="periodo">Decano Bienio 2010 – 2012</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/luis_alberto.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Luis Alberto Palomino Berrios</h4>
                                    <h5 class="periodo">Decano Bienio 2008 – 2010</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/roberto_bueno.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Roberto Bueno Cuadra</h4>
                                    <h5 class="periodo">Decano Bienio 2006 – 2008</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/hector_alejandro.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Héctor Alejandro Lamas Rojas</h4>
                                    <h5 class="periodo">Decano Bienio 2004 – 2006</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/luis_alfredo.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Luis Alfredo Benites Morales</h4>
                                    <h5 class="periodo">Decano Bienio 2002 – 2004</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/pastor_luis.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Pastor Luis Zapata Ponce</h4>
                                    <h5 class="periodo">Decano Bienio 2000 – 2002</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/carlos_ponce.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Carlos Ponce Díaz</h4>
                                    <h5 class="periodo">Decano Bienio 1998 – 2000</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/rosendo_landauro.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Rosendo Landauro Jara</h4>
                                    <h5 class="periodo">Decano Bienio 1996 – 1998</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/luis_rodriguez.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Luis Rodriguez de los Ríos</h4>
                                    <h5 class="periodo">Decano Bienio 1994 – 1996</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/jesus_percy.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Jesús Percy Romero Croce</h4>
                                    <h5 class="periodo">Decano Bienio 1992 – 1994</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/carlos_ponce.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Carlos Ponce Díaz</h4>
                                    <h5 class="periodo">Decano Bienio 1990 – 1992</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/julio_celada.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Julio Celada Gonzales</h4>
                                    <h5 class="periodo">Decano Bienio 1988 – 1990</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/carmen_amelia.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Carmen Amelia Ríos de Coloma</h4>
                                    <h5 class="periodo">Decana Bienio 1986 – 1988</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/julio_celada.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Julio Celada Gonzáles</h4>
                                    <h5 class="periodo">Decano Bienio 1984 – 1986</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/hector_alejandro.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">Héctor Alejandro Lamas Rojas</h4>
                                    <h5 class="periodo">Decano Bienio 1982 – 1984</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 my-3 px-3 h-100">
                            <div class="item">
                                <div class="imgC">
                                    <img src="./public/img/web/decanos/jose_infante.jpg" alt="decano">
                                </div>
                                <div class="text">
                                    <h4 class="nombre">José Infante Gonzáles</h4>
                                    <h5 class="periodo">Decano Bienio 1980 – 1982</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="left: -140px;">
                <i class="fas fa-arrow-circle-left fa-2x" style="color: var(--color2);"></i>
            </button>
            <button class="carousel-control-next fa-2x" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="right: -140px;">
                <i class="fas fa-arrow-circle-right" style="color: var(--color2);"></i>
            </button>
        </div>
        <!-- <div class="row">
            <div class="col-md-3 my-3 px-3 h-100">
                <div class="item">
                    <div class="imgC">
                        <img src="./public/img/web/decanos/manuel_silva.jpg" alt="decano">
                    </div>
                    <div class="text">
                        <h4 class="nombre">Manuel Silva Aguilar</h4>
                        <h5 class="periodo">Decano Actual</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3 px-3 h-100">
                <div class="item">
                    <div class="imgC">
                        <img src="./public/img/web/decanos/alejandro_velez.png" alt="decano">
                    </div>
                    <div class="text">
                        <h4 class="nombre">Alejandro Vélez Arana</h4>
                        <h5 class="periodo">Decano Periodo 2018 - 2022</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3 px-3 h-100">
                <div class="item">
                    <div class="imgC">
                        <img src="./public/img/web/decanos/maria_elena.jpg" alt="decano">
                    </div>
                    <div class="text">
                        <h4 class="nombre">María Elena Zuñiga Villegas</h4>
                        <h5 class="periodo">Decana Bienio 2016 – 2018</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3 px-3 h-100">
                <div class="item">
                    <div class="imgC">
                        <img src="./public/img/web/decanos/noemi_adelaida.jpg" alt="decano">
                    </div>
                    <div class="text">
                        <h4 class="nombre">Noemi Adelaida Sotelo Lopez</h4>
                        <h5 class="periodo">Decana Bienio 2012 – 2014</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3 px-3 h-100">
                <div class="item">
                    <div class="imgC">
                        <img src="./public/img/web/decanos/jaime_ramiro.jpg" alt="decano">
                    </div>
                    <div class="text">
                        <h4 class="nombre">Jaime Ramiro Aliaga Tovar</h4>
                        <h5 class="periodo">Decano Bienio 2010 – 2012</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3 px-3 h-100">
                <div class="item">
                    <div class="imgC">
                        <img src="./public/img/web/decanos/luis_alberto.jpg" alt="decano">
                    </div>
                    <div class="text">
                        <h4 class="nombre">Luis Alberto Palomino Berrios</h4>
                        <h5 class="periodo">Decano Bienio 2008 – 2010</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3 px-3 h-100">
                <div class="item">
                    <div class="imgC">
                        <img src="./public/img/web/decanos/roberto_bueno.jpg" alt="decano">
                    </div>
                    <div class="text">
                        <h4 class="nombre">Roberto Bueno Cuadra</h4>
                        <h5 class="periodo">Decano Bienio 2006 – 2008</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3 px-3 h-100">
                <div class="item">
                    <div class="imgC">
                        <img src="./public/img/web/decanos/hector_alejandro.jpg" alt="decano">
                    </div>
                    <div class="text">
                        <h4 class="nombre">Héctor Alejandro Lamas Rojas</h4>
                        <h5 class="periodo">Decano Bienio 2004 – 2006</h5>
                    </div>
                </div>
            </div>
        </div> -->
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