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
                                                <li><a href="<?php echo "index.php?c=".seg::codificar("menu")."&m=".seg::codificar("menu"). "&id=" . $id ?>">Home</a></li>
                                                <?php if(isset($_SESSION["usuario"])) {?>
                                                
                                                <?php }else{?>
                                                    <li><a href="<?php echo "index.php?c=".seg::codificar("registrar")."&m=".seg::codificar("registrar") ?>">Registrarte</a>
                                                    </li>
                                                <?php }?>

                                                <?php if(!isset($_SESSION["id_usuario"])) { ?>
                                                
                                                <?php }else{?>
                                                <?php if($_SESSION["tipo_usuario"] == 1) { ?>
                                                    <li><a href="<?php echo "index.php?c=".seg::codificar("administrar")."&m=".seg::codificar("administrar") ?>">Administrar Datos</a></li>
                                                <?php }else{?>
                                                    
                                                <?php }?> 
                                                <?php }?> 
                                               
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