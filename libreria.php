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


        #libros {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        figure {
            margin: 0;
            position: relative;
            height: 480px;
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 45%);
            transition: .3s all;
        }

        figure:hover {
            transform: scale(1.02);
            box-shadow: 0 0.5rem 2rem rgb(0 0 0 / 100%);
            cursor: pointer;
        }

        figure:hover .title {
            opacity: 1;
        }

        figure .title {
            /* opacity: 0; */
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background: rgba(11, 15, 95, 0.6);
            /* background: rgb(254 254 0 / 60%); */
            z-index: 9;
            top: 46%;
            width: 100%;
            /* height: 100%; */
        }

        figure .title h3 {
            color: #fff;
            font-weight: bold;
            padding: 1rem;
            text-align: center;
            font-size: 18px;
            margin-bottom: 0;
        }

        figure img {
            height: 100%;
            width: 100%;
            max-width: 100%;
            display: block;
            position: relative;
            /* filter: blur(20%); */
        }

        /* figcaption {
            position: absolute;
            top: 0;
            left: 0;
            padding: 20px;
            background: var(--color2);
            color: var(--color3);
        } */

        /* figcaption h3 {
            margin: 0;
            padding: 0;
            color: #fff;
            font-size: 16px;
        } */

        /* figcaption span:before {
            content: 'by ';
        } */

        /* figcaption a {
            text-align: center;
            padding: 5px 10px;
            border-radius: 2px;
            display: inline-block;
            background: #ed4e6e;
            color: #fff;
        } */

        /* figcaption p {
            text-align: justify;
        } */

        /* figcaption {
            height: 100%;
            width: 100%;
            opacity: 0;
            text-align: center;
            backface-visibility: hidden;
            transition: transform 0.3s, opacity 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        } */

        figure:hover figcaption,
        figure.cs-hover figcaption {
            opacity: 1;
            transform: translate(15px, 15px);
        }

        /* figcaption h3 {
            margin-top: 70px;
        } */

        figcaption span {
            display: block;
            font-size: 15px;
        }

        /* @media (max-width: 500px) {
            figcaption span {
                display: block;
                font-size: 12px;
            }
        } */

        .btn_registro {
            background-color: var(--color2);
            color: #fff;
            padding: 10px 20px;
        }

        .btn_registro:hover {
            background-color: var(--color1);
            color: var(--color2);
            padding: 10px 20px;
        }

        @media (max-width: 500px) {}
    </style>

    <?php include_once './partials/header2.php'; ?>

    <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="page_title">Librería</h1>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Librería</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="libros">
        <div class="container">
            <div class="row" style="padding-left:8%;padding-right:8%;">

                <div class="col-md-4 p-3">
                    <figure onclick="openModal(0)">
                        <img src="./public/img/galeria/libro1.jpeg" alt="img01">
                        <div class="title">
                            <h3>Mas detalles</h3>
                            <!-- <p class="fw-bold text-black text-decoration-underline">Ver mapa</p> -->
                        </div>
                    </figure>
                </div>

                <div class="col-md-4 p-3">
                    <figure onclick="openModal(1)">
                        <img src="./public/img/galeria/libro2.jpeg" alt="img01">
                        <div class="title">
                            <h3>Mas detalles</h3>
                            <!-- <p class="fw-bold text-black text-decoration-underline">Ver mapa</p> -->
                        </div>
                    </figure>
                </div>

                <div class="col-md-4 p-3">
                    <figure onclick="openModal(2)">
                        <img src="./public/img/galeria/libro3.jpeg" alt="img01">
                        <div class="title">
                            <h3>Mas detalles</h3>
                            <!-- <p class="fw-bold text-black text-decoration-underline">Ver mapa</p> -->
                        </div>
                    </figure>
                </div>

            </div>
        </div>
    </section>

    <!-- Modal detalle -->
    <div class="modal fade" id="modalDetalle" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold" style="color: var(--color1);">Detalles del libro</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4" id="detailbody">
                </div>
            </div>
        </div>
    </div>

    <?php include_once './partials/footer.php'; ?>

    <!-- <script type="text/javascript">
        let modal = new bootstrap.Modal(document.getElementById('myModal'), );
        modal.show();
    </script> -->
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

    <script>
        // MODAL
        var modal = new bootstrap.Modal(document.getElementById('modalDetalle'));

        const arraybooks = [{
                "portada": `<img src="./public/img/galeria/libro1.jpeg" alt="img01" width="100%">`,
                "titulo": "APRENDIZAJE Y ENSEÑANZA",
                "autor": "ZIBERSTEIN CAMACHO, José",
                "precio": "S/. 50.00",
                "cuerpo": ` <p> Escrito desde el enfoque Histórico Cultural 
                y sus aplicaciones en la didáctica desarrolladora, 
                ofrece el funmdamento para una enseñanza y un aprendizaje por ciclos, 
                según los momentos del desarrollo del estudiante, que desempelan un papel 
                esencial en la formación integral del mismo. </p>`,
            },
            {
                "portada": `<img src="./public/img/galeria/libro2.jpeg" alt="img01" width="100%">`,
                "titulo": "EFECTOS PSICOLOGICOS DE UNA PANDEMIA LLAMADA COVID 19",
                "autor": "AVILÉS AQUIJE, Pedro",
                "precio": "S/. 25.00",
                "cuerpo": ` <p> El confinamiento como un hecho psicosocial en base a la medida
                preventiva sanitaria, ha impactado negativamente en la salud mental y emocional
                de la gran mayoría de las personas. Este impacto es revisado en esta obra
                ofreciendo algunas estrategias para hacer frente a esta situación, 
                como la conceptualización de este fenómeno moderno. </p>`,
            },
            {
                "portada": `<img src="./public/img/galeria/libro3.jpeg" alt="img01" width="100%">`,
                "titulo": "HABILIDADES SOCIALES",
                "autor": "SEPERAK, Liliana",
                "precio": "S/. 20.00",
                "cuerpo": ` <p> Con la colaboración de profesionales docentes y psicólogos 
                            brindan herramientas que permitan a los niños desarrollar y mejorar sus competencias 
                            sociales con una intervención directa, planificada y sistematica. </p>`,
            },
        ]

        function openModal(index) {
            let book = arraybooks[index];
            template(book.portada, book.titulo, book.autor, book.precio, book.cuerpo);
            modal.show();
        }

        function template(portada, titulo, autor, precio, cuerpo) {
            let html = `
                        <div class="row justify-content-around">
                            <div class="shadow-lg col-md-6 px-2 pt-2">
                                ${portada}
                            </div>
                            <div class="col-md-5 px-2 pt-2">
                                <h3 style="color: var(--color1);">${titulo}</h3>
                                <p class="fw-bold">${autor}</p>
                                <div style="font-size: 16px;">
                                    <p class="fw-bold">${precio}</p>
                                </div>
                                <div class="text-justify mt-5" style="font-size: 16px;">
                                    ${cuerpo}
                                </div>

                            </div>
                        </div>
                        `;
            document.getElementById("detailbody").innerHTML = html;
        }
    </script>


</body>



</html>