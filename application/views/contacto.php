<?php
/**
*  @var bool $contacto
 * @var string $titulo
 * @var string $mensaje
 * @var bool $exitoso
 */
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include APPPATH . "views/shared/head.php"; ?>
        <title>Contacto | Flexilog</title>
    </head>

    <body>
        <?php include APPPATH . "views/shared/navbar.php"; ?>
        <main>
            <section class="pt-0">

                <div class="container pt-20 px-4 lg:mx-auto lg:max-w-5xl lg:pt-10">
                    <h2 class="encabezados lg:pt-16 text-left">Contacto</h2>
                </div>
                <div class="container lg:max-w-5xl lg:mx-auto">
                    <div class="mb-6 lg:mb-12 relative">

                        <?php if ($contacto) :?>
                            <div class="bg-<?= $exitoso ? "green" : "red" ?>-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 mb-4" role="alert">
                                <p class="font-bold"><?= $titulo ?></p>
                                <p class="text-sm"><?= $mensaje ?></p>
                            </div>
                        <?php endif; ?>

                        <form class="bg-white pt-6 px-4 pb-8 mb-4 lg:w-8/12 lg:pt-0 mx-auto" action="<?= site_url("portal/contacto") ?>" method="post">
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

                            <div class="mb-4">
                                <label class="block text-indigo-600 text-sm mb-3" for="empresa">
                                    ¿De qué empresa nos escribís?
                                </label>
                                <input class="appearance-none border-1 border-gray-100 rounded-3 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="empresa" id="empresa" type="text" placeholder="Nombre de la empresa">
                            </div>
                            <div class="mb-4">
                                <label class="block text-indigo-600 text-sm mb-3" for="mail">
                                    Correo electrónico
                                </label>
                                <input class="appearance-none border-1 border-gray-100 rounded-3 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="mail" type="email" placeholder="Ingresá tu correo electrónico">
                            </div>
                            <div class="mb-4">
                                <label class="block text-indigo-600 text-sm mb-3" for="telefono">
                                    Teléfono
                                </label>
                                <input class="appearance-none border-1 border-gray-100 rounded-3 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="telefono" id="telefono" type="email" placeholder="Ingresá tu teléfono">
                            </div>
                            <div class="mb-4">
                                <label class="block text-indigo-600 text-sm mb-3" for="consulta">
                                    Tu consulta
                                </label>

                                <textarea class="appearance-none border-1 border-gray-100 rounded-3 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="consulta" id="consulta" cols="30" rows="7" placeholder="Escriba su consulta"></textarea>
                            </div>
                            <div class="flex items-center justify-center">

                                <a class="button" href="#" onclick="$('form').submit();">
                                    Enviar
                                </a>
                            </div>
                        </form>
                        <div class="absolute h-48 w-40 overflow-x-hidden lg:w-3/12 z-0 opacity-50" style="z-index:-1; right:80px; top:-64px">
                            <img class="h-full w-full object-fill object-right lg:object-none" src="/assets/img/misc_02.png" alt="">
                        </div>
                        <div class="absolute h-auto w-64 overflow-x-hidden z-0 opacity-50 mancha-left left-0" style="z-index:-1;bottom:-88px">
                            <img class=" w-full  object-left" src="/assets/img/misc_01.png" alt="">
                        </div>

                    </div>
                </div>

            </section>

        </main>


        <?php include APPPATH . "views/shared/footer.php"; ?>

        <!-- Libraries -->
        <script src="/assets/js/siema.min.js" type=""></script>
        <script src="/assets/js/index.js" type=""></script>
        <script src="/assets/js/wow.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

        <!-- Main -->
        <script src="/assets/js/events.js"></script>


    </body>
</html>