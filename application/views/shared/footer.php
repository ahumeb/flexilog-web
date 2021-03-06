<footer class="bg-gray-50">
    <div class="w-full md:max-w-5xl md:mx-auto pt-4 px-3 md:p-6">
        <div class="flex flex-col flex-wrap max-h-full md:flex-row md:h-auto ">
            <ul class="w-full md:w-2/12 lg:w-3/12 md:flex-col md:justify-around">
                <li>
                    <a href="<?= site_url()?>"><img src="<?= site_url('/assets/img/logo.png')?>" class="h-6 max-w-full mb-2 md:h-8 md:mb-1" alt=""></a>
                </li>


            </ul>
            <ul class="w-full md:w-10/12 lg:w-9/12  md:flex md:flex-col md:justify-start md:h-32 md:flex-wrap">
                <li class="my-2 md:w-1/3">
                    <a class="text-gray-300 hover:text-gray-500 my-2" href="<?= site_url(array('portal', 'aviso_legal'))?>">Aviso Legal</a>
                </li>
                <li class="my-2 md:w-1/3">
                    <a class="text-gray-300 hover:text-gray-500 my-2" href="<?= site_url(array('portal', 'politicas_de_calidad'))?>">Política de Calidad</a>
                </li>
                <li class="my-2 md:w-1/3">
                    <a class="text-gray-300 hover:text-gray-500 my-2" href="<?= site_url(array("portal", "Nosotros"))?>">Nosotros</a>
                </li>
                <li class="my-2 md:w-1/3">
                    <a class="text-gray-300 hover:text-gray-500 my-2" href="<?= site_url(array("portal","Soluciones"))?>">Soluciones</a>
                </li>

                <li class="my-2 md:w-1/3">
                    <a class="text-gray-300 hover:text-gray-500 my-2" href="<?= site_url(array("portal", "Contacto"))?>">Contacto</a>
                </li>
                <li class="my-2 md:w-1/3">
                    <a class="text-gray-300 hover:text-gray-500 my-2" href="<?= site_url(array('portal', 'trabajar'))?>">Trabajá con Nosotros</a>
                </li>
                <li class="my-2 md:w-1/3">
                    <a class="text-gray-300 hover:text-gray-500 my-2" href="<?=site_url(array('portal', 'en_construccion'))?>">Acceso a Clientes</a>
                </li>
                <li class="my-2 md:w-1/3">
                    <a class="text-gray-300 hover:text-gray-500 my-2" href="<?=site_url(array('portal', 'perfil_impositivo'))?>">Perfil Impositivo</a>
                </li>
                <li class="my-2 md:w-1/3 flex-row">
                    <a class="w-8 h-8 " style="border-radius:50%" href="https://www.linkedin.com/company/40907135/admin/" target="_blank">

                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="-21 -35 682.66669 682" class="w-4 ">
                            <g>
                                <path d="m77.613281-.667969c-46.929687 0-77.613281 30.816407-77.613281 71.320313 0 39.609375 29.769531 71.304687 75.8125 71.304687h.890625c47.847656 0 77.625-31.695312 77.625-71.304687-.894531-40.503906-29.777344-71.320313-76.714844-71.320313zm0 0" class="active-path" fill="#949494"/>
                                <path d="m8.109375 198.3125h137.195313v412.757812h-137.195313zm0 0" class="active-path" fill="#949494"/>
                                <path d="m482.054688 188.625c-74.011719 0-123.640626 69.546875-123.640626 69.546875v-59.859375h-137.199218v412.757812h137.191406v-230.5c0-12.339843.894531-24.660156 4.519531-33.484374 9.917969-24.640626 32.488281-50.167969 70.390625-50.167969 49.644532 0 69.5 37.851562 69.5 93.339843v220.8125h137.183594v-236.667968c0-126.78125-67.6875-185.777344-157.945312-185.777344zm0 0" class="active-path" fill="#949494"/>
                            </g>
                        </svg>
                    </a>
                </li>

            </ul>

        </div>

    </div>
    <div class="bg-white py-3">
        <h6 class="text-gray-300 text-center text-xs md:text-base">Sincronizamos Negocios | © Flexilog <?= date("Y") ?></h6>
    </div>

</footer>
