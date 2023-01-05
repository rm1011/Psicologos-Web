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
        #baner {
            /* margin-top: 5rem; */
            margin-bottom: 5rem;
        }

        /* servicios inicio */

        #servicios {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        #servicios .item {
            display: flex;
            /* align-items: center; */
        }

        #servicios .item .imgC {
            /* width: 100px; */
            height: 100px;
            /* border: 3px solid var(--color1); */
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* padding: 10px; */
            /* position: absolute; */
            /* border-radius: 50%; */
        }

        #servicios .item .text {
            /* padding-left: 130px; */
            padding-left: 30px;
        }

        #servicios .item .text .titulo {
            color: #000;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 20px;
            font-family: 'Hind', sans-serif;
        }

        #servicios .item .imgC img {
            width: 40px;
            height: 40px;
            /* border-radius: 50%; */
        }

        #servicios .item .text p {
            margin-top: 1rem;
            /* text-align: justify; */
        }

        #servicios .card {
            transition: .3s;
        }

        #servicios .card:hover {
            transform: scale(1.08);
        }

        /* servicios final */

        #noticias {
            padding: 4rem 0;
            background-image:
                linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('./public/img/web/bg-noticia.jpg');
            background-size: cover;
            background-position: center;
            z-index: 99;
        }

        #noticias .item {
            position: relative;
        }

        #noticias img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        #noticias h6 {
            color: #FFF;
            font-size: 12px;
            text-align: center;
            font-weight: bold;
            position: absolute;
            top: 286px;
            /* left: 40%; */
            /* left: 126px; */
            left: 30%;
            right: 30%;
            padding: 8px 20px;
            background-color: var(--color1);
        }

        #noticias a {
            color: #fff;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
            margin-top: 1rem;
            display: flex;
            justify-content: center;
        }

        #noticias a:hover {
            color: var(--color2);
        }

        #eventos .item {
            /* margin-top: 3rem; */
            padding-top: 2rem;
            padding-bottom: 2rem;
            border-top: 1px solid #000;
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
    </style>

    <?php include_once './partials/header.php'; ?>

    <!-- <?php include_once './partials/redes.php'; ?> -->

    <section id="baner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./public/img/banner/banner1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./public/img/banner/banner2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./public/img/banner/banner3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="container" id="bienvenida">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-md">
                <h2>BIENVENIDA</h2>
                <div class="line"></div>
                <h5 class="mt-3 mb-4">Colegio de Psicólogos del Perú. Consejo Directivo Regional I Lima</h5>
                <p class="text-justify">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi excepturi fuga laudantium. Facere quo quasi culpa, explicabo totam autem placeat. Architecto placeat dolorem aspernatur iure error facere necessitatibus nihil consectetur.
                    Cumque repellat ipsa, aspernatur doloribus accusantium vitae dignissimos dolores ex repudiandae nihil at eos debitis, error cupiditate deserunt saepe iusto eveniet doloremque voluptas provident hic, asperiores sint? Cupiditate, vitae repellat?
                    Corrupti ipsum nam soluta perspiciatis qui sunt, pariatur illo quaerat delectus debitis voluptate dolores recusandae? Similique, vero. Tempora ipsa esse, nulla saepe voluptate, harum deleniti ipsam nam dolores recusandae obcaecati.
                    Voluptates eum, dolorum adipisci, assumenda minima mollitia non nulla voluptatem voluptas enim quisquam placeat expedita. Possimus cumque omnis sunt labore consequatur nesciunt dolores quibusdam.
                </p>
            </div>
            <div class="col-lg-5 col-md d-flex justify-content-center">
                <img src="./public/img/web/bienvenido.jpg" width="100%" alt="">
            </div>
        </div>
    </section>

    <div class="container" id="servicios">
        <div class="row">
            <div class="col">
                <h2 class="title">SERVICIOS AL AFILIADO</h2>
                <div class="line"></div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-4 col-md my-3">
                <a href="" class="card shadow rounded p-2 h-100">
                    <div class="crop">
                        <img src="./public/img/web/servicios_colegiatura.jpg" class="w-100 rounded shadow-sm">
                    </div>
                    <div class="card-body text-center py-3">
                        <p class="fw-bold" style="font-size: 20px; color: var(--color2)"> COLEGIATURA </p>
                        <p>Si está interesado en conseguir la colegiatura aquí puede ver los requisitos.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md my-3">
                <a href="" class="card shadow rounded p-2 h-100">
                    <div class="crop">
                        <img src="./public/img/web/servicios_conoce-tu-psicologo.jpg" class="w-100 rounded shadow-sm">
                    </div>
                    <div class="card-body text-center py-3">
                        <p class="fw-bold" style="font-size: 20px; color: var(--color2)">CONOCE A TU PSICÓLOGO</p>
                        <p>Verifique online si su Psicólogo se encuentra HABILITADO.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md my-3">
                <a href="" class="card shadow rounded p-2 h-100">
                    <div class="crop">
                        <img src="./public/img/web/servicios_consultorios-psicologicos.jpg" class="w-100 rounded shadow-sm">
                    </div>
                    <div class="card-body text-center py-3">
                        <p class="fw-bold" style="font-size: 20px; color: var(--color2)">CONSULTORIOS PSICOLÓGICOS</p>
                        <p>Disponemos de diversos espacios para el desarrollo de las psicoterapias y consultas psicológicas.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="noticias" style="margin-top: 5rem;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-white title">NOTICIAS</h2>
                    <div class="line" style="background: white;"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="item">
                        <img src="./public/img/galeria/noticia1.jpg" alt="">
                        <h6 class="text-center">01 / 01 / 2023</h6>
                    </div>
                    <br>
                    <a href="">FELIZ AÑO NUEVO</a>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <img src="./public/img/galeria/noticia2.jpg" alt="">
                        <h6 class="text-center">11 / 10 / 2023</h6>
                    </div>
                    <br>
                    <a href="">CAPACITACIONES VIRTUALES</a>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <img src="./public/img/galeria/noticia3.png" alt="">
                        <h6 class="text-center">01 / 09 / 2023</h6>
                    </div>
                    <br>
                    <a href="">CAPACITACIONES VIRTUALES NOVIEMBRE</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="eventos" style="margin-top: 5rem;">
        <div class="row" style="margin-bottom: 3rem;">
            <div class="col">
                <h2 class="title">EVENTOS</h2>
                <div class="line"></div>
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

    <div class="container" style="margin-top: 5rem; margin-bottom: 5rem;">
        <div class="row">
            <div class="col">
                <h2 class="title">UBICACIÓN</h2>
                <div class="line"></div>
            </div>
        </div>
        <iframe class="shadow-lg mt-5" style="border: 16px solid #fff; border-radius: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.563062506913!2d-77.03999048587939!3d-12.073555545685043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c90d9cad36c3%3A0x98d91132b6bf9684!2sColegio%20de%20Psic%C3%B3logos%20del%20Per%C3%BA%20CDR%20I-%20Lima%2C%20SEDE%20LEGAL%20E%20HIST%C3%93RICA!5e0!3m2!1ses-419!2spe!4v1672937562889!5m2!1ses-419!2spe" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

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