<?php
/**
 * @var array $listCategorias
 * @var Categoria $unaCategoria
 * @var Archivo $unArchivo
 */
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <?php include APPPATH . "views/shared/head.php"; ?>
        <title>Perfil Impositivo | Flexilog</title>
    </head>

    <body ng-app="PerfilesApp">

        <?php include APPPATH . "views/shared/navbar.php" ?>
        <!--script src="<?= site_url('assets/js/angular.js') ?>"></script>
        <script src="<?= site_url('assets/js/perfilesApp.js') ?>"></script-->
        <main>

            <section class="mt-0 pt-0">
                <div class="container pt-20 px-4 lg:mx-auto lg:max-w-5xl lg:pt-10">
                    <h2 class="encabezados lg:pt-16 text-left">Perfil Impositivo</h2>
                </div>

                <?php foreach($listCategorias as $unaCategoria): ?>
                    <div class="container lg:max-w-5xl lg:pt-2 lg:pb-16">
                        <!-- TITULO DE LA SECCIÓN -->
                        <h3 data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay=".2s" class="text-indigo-400 mb-3 lg:pt-16 text-left wow fadeInRight text-xl md:text-2xl lg:text-4xl lg:mb-8">
                            <?= $unaCategoria->nombre ?>
                        </h3>
                        <!-- TITULO DE LA SECCIÓN -->

                        <!-- SECCION DE ARCHIVOS -->
                        <div class="flex justify-start px-1 flex-wrap">
                            <!-- ITEM QUE SE REPITE -->
                            <?php foreach($unaCategoria->listArchivos as $unArchivo): ?>
                                <div class="wow fadeInDown w-full md:w-1/2 lg:w-1/3 p-2" data-wow-offset="50" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                    <a class="button w-full flex flex-row items-center p-0 m-0 cursor-pointer " download href="<?= site_url("portal/get-file-impositivo/" . $unArchivo->idArchivo) ?>">
                                        <div class="w-4/5 md:w-4/6 lg:w-3/4 mr-3 pl-2 hover:text-indigo-300">
                                            <h4 class="pt-2 font-body text-left leading-none text-indigo-500 mb-2 font-medium text-base md:text-base md:mb-2">
                                                <?= $unArchivo->descripcion ?>
                                            </h4>
                                            <p class="pb-2 leading-tight text-left font-body text-indigo-200 text-xs ">
                                                <span>Última actualización:</span>
                                                <?= empty($unArchivo->ultimaFechaModificacion) ? DateTime::createFromFormat("Y-m-d H:i:s", $unArchivo->fechaCarga)->format("d/m/Y") : DateTime::createFromFormat("Y-m-d H:i:s", $unArchivo->ultimaFechaModificacion)->format("d/m/Y") ?>
                                            </p>
                                        </div>
                                        <div class=" w-1/4 md:w-2/6 lg:w-1/4 h-full bg-indigo-100 p-3 hover:bg-indigo-200">
                                            <img class="h-16 mx-auto" src="<?= site_url('assets/img/ico_pdf.svg') ?>" alt="">
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                            <!-- / ITEM QUE SE REPITE -->

                        </div>
                        <!-- / SECCION DE ARCHIVOS -->

                    </div>
                <?php endforeach; ?>

            </section>


        </main>


        <?php include APPPATH . "views/shared/footer.php" ?>

        <!-- Libraries -->
        <script src="<?= site_url('/assets/js/index.js') ?>" type=""></script>
        <script src="<?= site_url('/assets/js/wow.js') ?>" type=""></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

        <!-- Main -->
        <script src="<?= site_url('/assets/js/events.js') ?>"></script>


    </body>

</html>