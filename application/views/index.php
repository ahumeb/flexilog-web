<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include APPPATH . "views/shared/head.php"; ?>
        <title>Home | Flexilog</title>
    </head>

    <body>

        <?php include APPPATH . "views/shared/navbar.php" ?>

        <main>

            <!-- TOP & CARDS -->
            <section id="home_top" class="mt-0 pt-0">
                <div class="h-80 w-auto flex items-end md:items-center bg-center bg-cover bg-no-repeat md:h-128" style="background-image: url('/assets/img/banner_home.jpg');">
                    <div class="w-full md:max-w-5xl md:mx-auto">
                        <h1 class="text-white w-2/3 md:w-2/4 px-3 pb-10 md:pb-0 text-3xl font-medium leading-tight md:text-5xl wow fadeInRight" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay=".2s">
                            Brindamos servicios de warehousing y distribución
                        </h1>
                    </div>

                </div>

                <div class="flex flex-wrap -mt-6 justify-around px-1 lg:flex-no-wrap md:max-w-5xl md:mx-auto md:-mt-10 md:justify-center">
                    <div class="item wow fadeInDown" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <img class="h-12 w-12 mb-1 md:h-16 md:w-auto md:mb-2" src="/assets/img/ico_lideres.png" alt="">
                        <div>
                            <h4 class="font-body leading-none text-indigo-500 text-center mb-2 font-medium text-base md:text-lg md:mb-2">
                                Líderes en distribución</h4>
                            <p class="leading-tight font-body text-indigo-500 text-center text-xs md:text-base">
                                con capilaridad diaria hacia puntos de entrega en todo el país.</p>
                        </div>
                    </div>
                    <div class="item wow fadeInDown" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay=".8s">
                        <img class="h-12 w-12 mb-1 md:h-16 md:w-auto md:mb-2" src="/assets/img/ico_experiencia.png" alt="">
                        <div>
                            <h4 class="font-body leading-none text-indigo-500 text-center mb-2 font-medium text-base md:text-lg md:mb-2">
                                Experiencia</h4>
                            <p class="leading-tight font-body text-indigo-500 text-center text-xs md:text-base">
                                en gestión de inventarios y surtidos.</p>
                        </div>
                    </div>
                    <div class="item wow fadeInDown" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay="1.1s">
                        <img class="h-12 w-12 mb-1 md:h-16 md:w-auto md:mb-2" src="/assets/img/ico_flota.png" alt="">
                        <div>
                            <h4 class="font-body leading-none text-indigo-500 text-center mb-2 font-medium text-base md:text-lg md:mb-2">
                                Gestión de la flota</h4>
                            <p class="leading-tight font-body text-indigo-500 text-center text-xs md:text-base">
                                de distribución con sistema de seguimiento y visibilidad de los pedidos.</p>
                        </div>
                    </div>
                    <div class="item wow fadeInDown" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay="1.4s">
                        <img class="h-12 w-12 mb-1 md:h-16 md:w-auto md:mb-2" src="/assets/img/ico_vehiculos.png" alt="">
                        <div>
                            <h4 class="font-body leading-none text-indigo-500 text-center mb-2 font-medium text-base md:text-lg md:mb-2">
                                + de 500 vehículos</h4>
                            <p class="leading-tight font-body text-indigo-500 text-center text-xs md:text-base">
                                para la distribución con alcance nacional.</p>
                        </div>
                    </div>

                </div>
            </section>

            <!-- TABS -->
            <section class="lg:relative flex flex-col items-center md:py-16 lg:flex-row">
                <div class="bg-no-repeat bg-auto bg-right-bottom w-screen h-88 bg-indigo-700 md:bg-cover md:bg-scroll md:bg-center lg:w-1/2 lg:h-128" style="background-image: url('/assets/img/warehousing.png');"></div>
                <div class="translateY-50 container lg:mx-auto lg:right-0 lg:left-0 lg:absolute lg:top-1/2 lg:max-w-4xl  ">
                    <div class="-mt-12 w-80 h-100 bg-white mx-auto left-0 right-0 shadow md:w-10/12 lg:mr-0  lg:mt-0 lg:shadow-md wow fadeInRight" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="tabs p-2 md:p-8">

                            <input type="radio" id="tab1" name="tab-control" checked="checked">
                            <input type="radio" id="tab2" name="tab-control">
                            <input type="radio" id="tab3" name="tab-control">
                            <ul class="md:mb-4">
                                <li class="text-gray-300 text-sm md:text-lg" title="Warehousing">
                                    <label for="tab1" role="button">
                                        <span>Warehousing</span></label>
                                </li>
                                <li class="text-gray-300 text-sm md:text-lg" title="Distribución">
                                    <label for="tab2" role="button">
                                        <span>Distribución</span></label>
                                </li>
                                <li class="text-gray-300 text-sm md:text-lg" title="Logística">
                                    <label for="tab3" role="button">
                                        <span>Logística</span></label>
                                </li>                                
                            </ul>

                            <div class="slider">
                                <div class="indicator"></div>
                            </div>
                            <div class="content mt-6">
                                <article class="flex flex-col justify-center">
                                    <p class="text-indigo-700 text-base leading-tight mb-8">
                                        Contamos con 11 centros de distribución de última generación ubicados estratégicamente a lo largo del país. Los mismos cuentan con temperatura controlada, cámaras de frío y poseen un sistema continuo de monitoreo y registro de temperatura online.
                                    </p>
                                    <p class="text-indigo-700 text-base leading-tight mb-8">
                                        Disponemos de las habilitaciones necesarias para almacenar y realizar acondicionamiento secundario de especialidades medicinales y productos médicos.
                                    </p>
                                    <p class="text-indigo-700 text-base leading-tight mb-8">
                                        Realizamos gestión de stock por número de lote y fecha de vencimiento, adaptado a los requerimientos de distintos productos y clientes.
                                    </p>

                                    <a href="<?= site_url("portal/soluciones") ?>" class="button">Conocer más</a>
                                </article>
                                <article class="flex flex-col justify-center">
                                    <p class="text-indigo-700 text-base leading-tight mb-8">
                                        Brindamos distribución multicanal en todo el país. Atendemos el canal retail, Droguerías, Distribuidores, APMs, entre otros. Realizamos más de 16.000 entregas diarias en todas las provincias, gracias a nuestra flota con más de 500 vehículos de diferentes portes.
                                    </p>
                                    <p class="text-indigo-700 text-base leading-tight mb-8">
                                        Realizamos entregas en 24hs. en AMBA y entre 24 y 96hs. en el interior. Trabajamos tanto carga seca como cadena de frío.
                                    </p>
                                    <p class="text-indigo-700 text-base leading-tight mb-8">
                                        Todos nuestros vehículos son monitoreados de manera continua para saber su ubicación exacta en tiempo real.
                                    </p>

                                    <a href="<?= site_url("portal/soluciones") ?>" class="button">Conocer más</a>
                                </article>
                                <article class="flex flex-col justify-center">
                                    <p class="text-indigo-700 text-base leading-tight mb-4">
                                        Realizamos diariamente recepción de mercadería de cientos de proveedores, almacenaje, preparación de pedidos, manejo de lote y fecha de vencimiento entre otros.
                                    </p>
                                    <p class="text-indigo-700 text-base leading-tight mb-4">
                                        Brindamos servicios de valor agregado como etiquetado, estampillado, picking y packing.
                                    </p>
                                    <p class="text-indigo-700 text-base leading-tight mb-4">
                                        Contamos con tecnología de radio frecuencia para todas las operaciones dentro del proceso logístico.
                                    </p>
                                    <p class="text-indigo-700 text-base leading-tight mb-4">
                                        Ofrecemos proyectos “Llave en Mano”, adaptamos nuestros procesos al requerimiento del cliente.
                                    </p>

                                    <a href="<?= site_url("portal/soluciones") ?>" class="button">Conocer más</a>
                                </article>
                            </div>

                        </div>

                    </div>
                </div>

            </section>

            <!-- COBERTURA -->
            <section class="bg-white mb-0">
                <div class="container px-2 flex flex-col justify-center items-center md:flex-row lg:justify-end">
                    <div class="textos flex flex-col justify-center items-center md:w-1/2 lg:w-1/3">
                        <img src="/assets/img/ico_cobertura.png" class="mb-4" alt="">
                        <h3 class="text-indigo-600 font-medium text-center text-2xl mb-3">Cobertura nacional</h3>
                        <p class="text-indigo-600 text-base text-center mb-3 md:max-w-xs lg:max-w-md lg:text-left">
                            Contamos con más de 60.000 m2 de depósitos en centros de distribución propios, estratégicamente ubicados, lo que asegura una cobertura nacional y de cercanía con los clientes.
                        </p>
                        <p class="text-indigo-600 text-base text-center mb-3 md:max-w-xs md:pb-6 lg:max-w-md lg:text-left">
                            Sinergizados en nuestra plataforma de distribución nacional y experiencia, brindamos un servicio de excelencia a precios competitivos.
                        </p>
                    </div>
                    <div class="md:w-1/2 ">
                        <img class="my-6" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay="0.2s" src="/assets/img/mapa.png" alt="">
                    </div>

                </div>

            </section>

            <!-- MARCAS -->
            <div class="bg-white my-0">
                <div id="marcas">
                    <img src="/assets/img/marcas_lafarmaco.png" alt="logo la farmaco">
                    <img src="/assets/img/marcas_nestle.png" alt="logo nestle">
                    <img src="/assets/img/marcas_revlon.png" alt="logo revlon">
                    <img src="/assets/img/marcas_tenacta.png" alt="logo tenacta">
                    <img src="/assets/img/marcas_colgate.png" alt="logo colgate">
                    <img src="/assets/img/marcas_fecofar.png" alt="logo fecofar">
                    <img src="/assets/img/marcas_kimberlyclark.png" alt="logo kimberly clark">
                    <img src="/assets/img/marcas_lafarmaco.png" alt="logo la farmaco">
                    <img src="/assets/img/marcas_philips.png" alt="logo philips">
                    <img src="/assets/img/marcas_richet.png" alt="logo richet">
                    <img src="/assets/img/marcas_saenz.png" alt="logo saenz">
                    <img src="/assets/img/marcas_scienza.png" alt="logo scienza">
                </div>
                <div class="pb-6">
                    <ul id="siema_nav" class="flex justify-center items-center mt-4 md:justify-end md:mr-32">
                        <li class="bg-white p-2 mx-2 text-indigo-600 hover:bg-indigo-200 hover:cursor-pointer prev">
                            <svg class="fill-current" width="8" height="13" viewbox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.828 6.364L7.778 11.314L6.364 12.728L0 6.364L6.364 0L7.778 1.414L2.828 6.364Z"/>
                            </svg>
                        </li>
                        <li class="bg-white p-2 mx-2 text-indigo-600 hover:bg-indigo-200 hover:cursor-pointer next">
                            <svg class="fill-current" width="8" height="13" viewbox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.95 6.364L0 1.414L1.414 0L7.778 6.364L1.414 12.728L0 11.314L4.95 6.364Z"/>
                            </svg>
                        </li>

                    </ul>
                </div>
            </div>

        </main>


        <?php include APPPATH . "views/shared/footer.php" ?>

        <!-- Libraries -->
        <script src="<?= site_url('/assets/js/siema.min.js')?>" type=""></script>
        <script src="<?= site_url('/assets/js/index.js')?>" type=""></script>
        <script src="<?= site_url('/assets/js/wow.js')?>" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

        <!-- Main -->
        <script src="/assets/js/events.js"></script>


        <script>
            const marcas = new Siema({
                selector: '#marcas',
                duration: 200,
                easing: 'ease-out',
                perPage: {
                    0: 3,
                    768: 4,
                    1024: 6
                },
                startIndex: 0,
                draggable: true,
                multipleDrag: true,
                threshold: 20,
                loop: true,
                rtl: false
            });

            document
                .querySelector('#siema_nav > .prev')
                .addEventListener('click', () => marcas.prev());
            document
                .querySelector('#siema_nav > .next')
                .addEventListener('click', () => marcas.next());
            setInterval(() => marcas.next(), 2000)
        </script>


    </body>
</html>