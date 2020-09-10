<?php
/**
 * @var bool $aplico
 * @var bool $correcto
 * @var string $titulo
 * @var string $mensaje
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include APPPATH . "views/shared/head.php"; ?>
        <title>Trabajá con Nosotros | Flexilog</title>


        <link rel="stylesheet" href="/assets/css/styles.css">
        <link rel="stylesheet" href="/assets/css/tailwind.css">

        <link rel="stylesheet" href="/assets/css/animations.css">
    </head>

    <body>
        <?php include APPPATH . "views/shared/navbar.php" ?>
        <main>

            <section class="pt-0">
                <div class="container pt-20 px-4 lg:mx-auto lg:max-w-5xl lg:pt-10">
                    <h2 class="encabezados lg:pt-16 text-left">Formá parte de nuestro equipo</h2>
                    <p class="text-xl text-indigo-500 tracking-wide mb-8">Dejanos tu Curriculum para futuras oportunidades laborales
                    </p>
                    <span></span>
                </div>
                <div class="container lg:max-w-5xl lg:mx-auto">
                    <?php if ($aplico): ?>
                    <div class="mb-6 lg:flex lg:mb-12 lg:flex-row">
                        <div class="bg-<?= $correcto ? "green" : "red" ?>-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                            <p class="font-bold"><?= $titulo ?></p>
                            <p class="text-sm"><?= $mensaje ?></p>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="mb-6 lg:flex lg:mb-12 lg:flex-row">
                        <form class="bg-white pt-6 pb-8 mb-4 lg:w-8/12 lg:pt-0" enctype="multipart/form-data" action="<?= site_url("portal/trabajar") ?>" method="post">
                            <div class="md:flex justify-between">
                                <div class="mb-4 md:mr-2 md:w-6/12">
                                    <label class="block text-indigo-600 text-sm mb-3" for="Nombre">
                                        Nombre
                                    </label>
                                    <input class="appearance-none border-1 border-gray-100 rounded-3 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nombre" id="nombre" type="text" placeholder="Nombre">
                                </div>
                                <div class="mb-4 md:ml-2 md:w-6/12">
                                    <label class="block text-indigo-600 text-sm mb-3" for="Apellidos">
                                        Apellidos
                                    </label>
                                    <input class="appearance-none border-1 border-gray-100 rounded-3 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="apellido" id="apellido" type="text" placeholder="Apellidos">
                                </div>
                            </div>

                            <div class="mb-4 ">
                                <label class="block text-indigo-600 text-sm mb-3" for="mail">
                                    Correo electrónico
                                </label>
                                <input class="appearance-none border-1 border-gray-100 rounded-3 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="mail" id="mail" type="email" placeholder="Ingresá tu correo electrónico">
                            </div>
                            <div class="mb-4 "></div>

                            <div class="mb-4">
                                <label class="block text-indigo-600 text-sm mb-3" for="consulta">
                                    Presentación
                                </label>

                                <textarea class="appearance-none border-1 border-gray-100 rounded-3 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="presentacion" id="consulta" cols="30" rows="7" placeholder="Contanos tus intereses y aspiraciones profesionales"></textarea>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <label class="button" for="file_cv">Adjuntar CV</label>
                                    <input class="appearance-none border-1 border-gray-100 rounded-3 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" id="file_cv" name="archivoCV">
                                </div>

                                <button type="submit" class="button mr-0" href="#">
                                    Enviar
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </section>

        </main>


        <?php include APPPATH . "views/shared/footer.php" ?>

        <!-- Libraries -->
        <script src="/assets/js/siema.min.js" type=""></script>
        <script src="/assets/js/index.js" type=""></script>
        <script src="/assets/js/wow.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

        <!-- Main -->
        <script src="/assets/js/events.js"></script>


    </body>
</html>