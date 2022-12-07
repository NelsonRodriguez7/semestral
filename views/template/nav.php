<!--? Preloader Start -->
<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent">
                <div class="main-header  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <div class="menu-main d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav> 
                                            <ul id="navigation">
                                                <li><a href="<?php echo "index.php?c=".seg::codificar("principal")."&m=".seg::codificar("index") ?>">Home</a></li>
                                                <li><a href="#">Formulario</a>
                                                    <ul class="submenu">
                                                        <li><a href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("login") ?>">Login</a></li>
                                                        <li><a href="<?php echo "index.php?c=".seg::codificar("registrar")."&m=".seg::codificar("registrar") ?>">Registrarse</a></li>
                                                        <li><a href="<?php echo "index.php?c=".seg::codificar("administrar")."&m=".seg::codificar("administrar") ?>">Administrar cuenta</a></li>
                                                        <li><a href="<?php echo "index.php?c=".seg::codificar("modifica")."&m=".seg::codificar("modifica") ?>">Modifica</a></li>
                                                        <li><a href="<?php echo "index.php?c=".seg::codificar("aggcategoria")."&m=".seg::codificar("aggcategoria") ?>">Agregar Categoria</a></li>
                                                        <li><a href="<?php echo "index.php?c=".seg::codificar("aggplato")."&m=".seg::codificar("aggplato") ?>">Agregar Plato</a></li>
                                                        <li><a href="<?php echo "index.php?c=".seg::codificar("formularios")."&m=".seg::codificar("vercodigoqr") ?>">Agregar Plato</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Menu</a></li>
                                                <li><a href="#">Elementos</a>
                                                    <ul class="submenu">
                                                        <li><a href="elements.html">Element</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header-right-btn f-right d-none d-lg-block ml-20">
                                    <?php if(isset($_SESSION["usuario"])) {?>
                                        <a href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("cerrar_sesion") ?>" class="border-btn header-btn">Logout</a>
                                    <?php }else{?>
                                        <a href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("login") ?>" class="border-btn header-btn">Login</a>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>   
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Header End -->
    </header>