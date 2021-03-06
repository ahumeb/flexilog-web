<header>
    <header class="bg-white shadow-lg fixed w-screen z-10 md:w-full left-0 right-0 mx-auto">
        <div class=" container flex justify-between items-center px-4 py-3 lg:max-w-5xl">
            <div>
                <a href="<?= site_url() ?>"><img class="h-8 lg:h-auto" src="<?= site_url('/assets/img/logo.png')?>" alt=""></a>
            </div>
            <ul class="">
                <li>
                    <a class="nav-link " href="<?= site_url(array("portal", "nosotros")) ?>">Nosotros</a>
                </li>
                <li>
                    <a class="nav-link " href="<?= site_url(array("portal", "soluciones")) ?>">Soluciones</a>
                </li>

                <li>
                    <a class="nav-link " href="<?= site_url(array("portal", "Contacto"))?>">Contacto</a>
                </li>
                <!-- <li><a class="button " href="#">Ingresá</a></li> -->
            </ul>
            <div class="lg:hidden">
                <button id="ham" type="button" class="block text-indigo-500 hover:text-indigo-200 focus:text-pink-400">
                    <svg class="h-6 w-6 fill-current" viewbox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0H20V2.25H0V0ZM0 7.875H20V10.125H0V7.875ZM0 15.75H20V18H0V15.75Z" fill="#233B96"/>
                    </svg>

                </button>
            </div>
        </div>

    </header>

    <nav class="nav-drill z-20 lg:hidden">
        <a class="nav-link " href="<?= site_url(array("portal", "Nosotros"))?>">Nosotros</a>
        <a class="nav-link " href="<?= site_url(array("portal","Soluciones"))?>">Soluciones</a>
        <a class="nav-link " href="<?= site_url(array("portal", "Contacto"))?>">Contacto</a>
        <a class="button ml-2" href="#">Ingresá</a>
    </nav>


</header>