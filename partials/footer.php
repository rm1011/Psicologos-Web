<style>
    .topcontrol {
        position: fixed;
        bottom: 30px;
        right: 20px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        /* background: #00D553; */
        /* width: 50px; */
        /* height: 50px; */
        /* padding-top: 6px; */
        /* padding-left: 9px; */
        /* border: 2px solid white; */
        /* border-radius: 50%; */
        transition: all 2 ease-in-out;
    }

    .topcontrol:hover {
        transform: scale(1.06);
    }

    .topcontrol i {
        color: var(--color1);
        font-size: 46px;
    }

    .topcontrol2 {
        position: fixed;
        bottom: 80px;
        right: 80px;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        width: 180px;
        height: 30px;
        background: #F8F9FA;
        border-radius: 0.25rem;
        border: 1px solid #dee2e6;
        /* padding-top: 6px; */
        /* padding-left: 9px; */
        /* border-radius: 50%; */
        transition: all 2 ease-in-out;
    }

    .topcontrol2 span {
        text-align: center;
        font-weight: bold;
        color: var(--color1);
        padding: 1rem 2rem;
    }

    .topcontrol4 {
        position: fixed;
        bottom: 230px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        background-color: #FF0000;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol4 i {
        font-size: 36px;
        color: #fff;
        margin-top: 3px;
        margin-left: -4px;
    }

    .topcontrol4:hover {
        transform: scale(1.08);
    }

    .topcontrol5 {
        position: fixed;
        /* bottom: 112px; */
        bottom: 50px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        /* background: rgb(123, 56, 174); */
        background: linear-gradient(74deg, rgba(123, 56, 174, 1) 0%, rgba(237, 27, 32, 1) 37%, rgba(237, 32, 31, 1) 55%, rgba(236, 12, 35, 1) 67%, rgba(249, 202, 0, 1) 100%);
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol5 i {
        /* height: 28px; */
        /* width: 32px; */
        color: white;
        font-size: 36px;
        margin-top: 4px;
        margin-left: 2px;
    }

    .topcontrol5:hover {
        transform: scale(1.08);
    }

    .topcontrol6 {
        position: fixed;
        bottom: 110px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        /* background-color: #00A884; */
        background-color: #28C44C;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol6 i {
        /* height: 50px; */
        /* width: 50px; */
        font-size: 36px;
        margin-top: 4px;
        margin-left: 1px;
        color: white;
    }

    .topcontrol6:hover {
        transform: scale(1.08);
    }

    .topcontrol7 {
        position: fixed;
        bottom: 170px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        background-color: #0B86EE;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol7 i {
        /* height: 33px; */
        /* width: 33px; */
        font-size: 36px;
        color: #fff;
        margin-top: 5px;
        margin-left: 5px;
    }

    .topcontrol7:hover {
        transform: scale(1.08);
    }

    .boton {
        background: var(--color1);
        color: white;
        padding: 10px 20px;
        border-radius: 6px;
    }
</style>
<footer id="footer">

    <div class="container-fluid" id="dates">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6 d-flex justify-content-center">
                    <div>
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="./public/img/icons/escudo.png" alt="logo" height="100">
                            <h4 class="ms-3 text-white">COLEGIO DE PSICÓLOGOS DEL PERÚ <br> CONSEJO DIRECTIVO REGIONAL I - LIMA</h4>
                        </div>

                        <div class="redes">
                            <div class="red">
                                <a class="yt" href="https://www.youtube.com/channel/UCe3d1HnqhS3n1YjTjhBmo-A" target="_blank">
                                    <span><i class="fab fa-youtube"></i></span>
                                </a>
                            </div>
                            <div class="red">
                                <a class="fb" href="https://www.facebook.com/CDRILimaColegiodepsicologos" target="_blank">
                                    <span><i class="fab fa-facebook-f"></i></span>
                                </a>
                            </div>
                            <div class="red">
                                <a class="tw" href="https://twitter.com/colegiopsicolo1" target="_blank">
                                    <span><i class="fab fa-twitter"></i></span>
                                </a>
                            </div>
                            <div class="red">
                                <a class="ig" href="#" target="_blank">
                                    <span><i class="fab fa-instagram"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <form id="form-contacto" onsubmit="enviarCorreo(event)">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 my-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="nombres" type="text" required="" class="form-control" placeholder="Nombres">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="Número de Colegiatura" type="text" required="" class="form-control" placeholder="Número de Colegiatura">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg col-md my-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="correo" type="email" class="form-control" required="" placeholder="Correo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 my-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <textarea name="consulta" rows="4" class="form-control" required="" placeholder="Ingresa tu Consulta"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 my-1 d-flex justify-content-between align-items-center">
                                <button type="submit" class="boton">
                                    Enviar
                                </button>
                                <div class="form-check" data-bs-toggle="modal" data-bs-target="#modalPoliticas">
                                    <input class="form-check-input" type="checkbox" value="" required="">
                                    <label class="form-check-label text-white" for="flexCheckDefault">
                                        He leído y acepto las políticas de privacidad
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="col-12 col-md-3 col-lg-3 date-info">
                    <h5>DIRECCION</h5>
                    <div class="d-flex flex-column text">
                        <p class="mb-2"> <i class="fas fa-map-marker-alt me-2"></i> Jr. Camilo Carrillo 164, Jesús María, Lima</p>
                    </div>
                    <h5>TELEFONOS</h5>
                    <div class="d-flex flex-column text">
                        <p class="mb-2"> <i class="fas fa-phone-alt me-2"></i> Informes: 952 130 045 / (01) 330 5390</p>
                        <p class="mb-2"> <i class="fas fa-phone-alt me-2"></i> Tesorería: 986 776 409 / (01) 330 5389</p>
                    </div>
                </div> -->
                <!-- <div class="col-12 col-md-3 col-lg-3 date-info">
                    <h5>CORREOS</h5>
                    <div class="d-flex flex-column text">
                        <a class="mb-2" href="mailto:informes@cpsplima.pe" target="_blank"> <i class="fas fa-envelope me-2"></i> informes@cpsplima.pe</a>
                        <a class="mb-2" href="mailto:tesoreria@cpsplima.pe" target="_blank"> <i class="fas fa-envelope me-2"></i> tesoreria@cpsplima.pe</a>
                        <a class="mb-2" href="mailto:capacitaciones@cpsplima.pe" target="_blank"> <i class="fas fa-envelope me-2"></i> capacitaciones@cpsplima.pe</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <section class="container-fluid barinf">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-start">
                    <p class="mb-0 text-center" style="font-size: 14px;">Colegios Psicologos del Perú</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <p class="mb-0 text-center" style="font-size: 14px;">Desarrollado por <a href="https://www.cubicol.pe/agencia/" target="_blank" style="color: var(--color2);">Sensoft Solutiones</a></p>
                </div>
            </div>
        </div>
    </section>


    <div class="topcontrol4">
        <a href="https://www.youtube.com/channel/UCe3d1HnqhS3n1YjTjhBmo-A" target="_blank">
            <i class="fab fa-youtube"></i>
        </a>
    </div>
    <div class="topcontrol5">
        <a href="" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
    <div class="topcontrol6">
        <a href="https://api.whatsapp.com/send?phone=51952130045" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <div class="topcontrol7">
        <a href="https://www.facebook.com/CDRILimaColegiodepsicologos" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
    </div>

</footer>