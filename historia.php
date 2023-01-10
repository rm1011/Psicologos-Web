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

        .quienes {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        .quienes p {
            text-align: justify;
        }

        .quienes .titulo {
            border-left: 4px solid var(--color1);
            padding-left: 2rem;
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
                                <li class="breadcrumb-item text-white">Historia</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container quienes">
        <div class="row">
            <div class="col">
                <p>
                    Históricamente la creación del Colegio de Psicólogos del Perú se remonta
                    al año 1979, cuando la última Junta Directiva de la Sociedad Peruana de
                    Psicología (SPP) después de un arduo trabajo de recopilación de la
                    información requerida y una permanente discusión con los colegas de
                    entonces, formalizó la solicitud de creación de la Orden ante el
                    Gobierno de la Fuerzas Armadas que dirigía el General Francisco
                    Morales Bermúdez Cerrutti, constituyéndose en la institución gestora de
                    la Ley que, finalmente, después de diversos contratiempos, el Gobierno
                    aprobó el día miércoles 30 de abril del año 1980.
                </p>
                <p>
                    Con no poca frecuencia se suele confundir a la primera Comisión mandatoria,
                    estipulada en las Disposiciones Transitorias de la Ley N 23019,
                    con los gestores de la misma. Esta Comisión estuvo integrada por
                    el Dr. Marcelino Matta Saravia, Representante del Primer Ministro;
                    Ps. Roberto Lerner Stein, Representante de la Sociedad Peruana de
                    Psicología y gestora de la Ley; Víctor Amorós Terán, Representante
                    de la Universidad Nacional Mayor de San Marcos y de las Universidades
                    Nacionales; y Cecilia Thorne de Trelles, Representante de la Universidad
                    Católica del Perú y de las Universidades Particulares.
                </p>
                <p>
                    Ciertamente, toda Ley se gesta a partir de una solicitud presentada por
                    alguna persona natural o institución jurídicamente representativa,
                    para lo cual es necesario adjuntar la documentación que la
                    sustente: modelo de anteproyecto de Ley, exposición de motivos que
                    justifican la creación del Colegio, proyecto de Estatuto de la futura
                    institución y proyecto de Código de Ética, entre otros.
                    En suma, finalmente, el Decreto Ley N 23019 fue el feliz
                    resultado de la constancia y continuo requerimiento de la
                    Sociedad Peruana de Psicología (SPP) que contó con la invalorable
                    ayuda del Dr. Marcelino Matta Saravia, asesor del Primer Ministro.
                </p>
                <p>
                    Fue así, entonces, que después de muchos trámites ante el Gobierno del General Morales
                    Bermúdez y, especialmente a través del General Pedro Richter Prada, Primer Ministro del
                    régimen de entonces, como se le dio mayor prestancia y significación a la labor del
                    psicólogo profesional en el país, no obstante que la mayoría de los miembros de la
                    Junta Directiva de la Sociedad Peruana de Psicología estaba integrada por psicólogos
                    clínicos. Asimismo, es también anecdótico el impase surgido con el Colegio Médico del
                    Perú (CMP), institución que se opuso a la aprobación de la solicitud de creación de
                    la Orden; hecho que hizo suyo el Ministro de Salud de ese entonces.
                </p>
            </div>
        </div>
        <div class="row" style="margin-top: 5rem;">
            <div class="col px-md-5">
                <h3 class="mb-4 titulo">Nuestros Fines</h3>
                <p>Regular la práctica profesional y velar por que este se realice de acuerdo al Código de Ética Profesional que dicte el Colegio; promover el avance de la psicología a fin de que contribuya al desarrollo y bienestar del país; asumir la defensa de sus miembros como organismo gremial en todo aquello que competa el ejercicio de la profesión; propiciar la superación profesional de sus miembros mediante el desarrollo de actividades científico, técnico, cultural y lo demás que señale el art. 4 de la Ley de Creación.</p>
                <h3 class="mb-4 titulo mt-5">Patrimonio</h3>
                <p>Las cotizaciones que abonen sus miembros, el producto de los bienes que adquiera por cualquier título, el producto de las multas aplicadas por medidas disciplinarias, las donaciones que se les otorgue y las rentas que genere, los honorarios que perciba por los servicios que preste y otros ingresos derivados de la actividad gremial.</p>
            </div>
            <div class="col px-md-5">
                <h3 class="mb-4 titulo">Órganos Directivos</h3>
                <p>El Consejo Directivo Nacional es el órgano de mayor jerarquía, con jurisdicción en todo el país y cuya sede es la capital de la república. Los Consejos Directivos regionales son órganos de jerarquía regional y tiene por sede y jurisdicción la que establezca el estatuto.</p>
                <ul>
                    <li>La elección de los cargos será por un periodo de dos años y no podrá haber reelección inmediata. </li>
                    <li>Rectificación con fecha: Lima, 25 de junio de 2001</li>
                    <li>Inscripción de Personas Jurídicas Creadas por Ley</li>
                    <li>Colegio de psicólogos del Perú</li>
                    <li>Oficina registral de Lima y Callao</li>
                    <li>Oficina Lima</li>
                    <li>N° de partida: 11293897</li>
                </ul>
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