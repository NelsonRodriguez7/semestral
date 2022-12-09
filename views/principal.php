<main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay=".2s">Descubre tu nueva pagina</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">Crea tu menu de restaurate en un QR</h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">Utiliza todas nuestras herramientras para llegar a más personas y descubre como la implementacion de un QR para mostrar tu menu llama la atención de tu clientes.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                    <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
                                        <input type="hidden" name="cmd" value="_xclick">
                                        <input type="hidden" name="business" value="sb-uecs315353654@business.example.com">
                                        <input type="hidden" name="item_name" value="Suscripción Pago único de Grupo4.com">
                                        <input type="hidden" name="item_number" value="cod00001">
                                        <input type="hidden" name="amount" value="49.99">
                                        <input type="hidden" name="tax" value="0">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="country" value="PA">
                                        <input type="hidden" name="return" value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("registar_notificacion") ?>">
                                        <input type="hidden" name="notify_url" value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("registar_notificacion") ?>"> 
                                        <input type="hidden" name="cancel_return" value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("cancelar") ?>">
                                        <input type="submit" name="submit" value="Pagar con Paypal $49.99 " class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay=".2s">Descrubre tu nueva pagina</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">Un solo pago para toda la vida</h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">Te ofrecemos un menu qr donde puedes tener todos tus platilos con imagenes, precio, descripcion; Ademas de subir tu logo y banner</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                    <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
                                        <input type="hidden" name="cmd" value="_xclick">
                                        <input type="hidden" name="business" value="sb-uecs315353654@business.example.com">
                                        <input type="hidden" name="item_name" value="Suscripción Pago único de Grupo4.com">
                                        <input type="hidden" name="item_number" value="cod00001">
                                        <input type="hidden" name="amount" value="49.99">
                                        <input type="hidden" name="tax" value="0">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="country" value="PA">
                                        <input type="hidden" name="return" value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("registar_notificacion") ?>">
                                        <input type="hidden" name="notify_url" value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("registar_notificacion") ?>"> 
                                        <input type="hidden" name="cancel_return" value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("cancelar") ?>">
                                        <input type="submit" name="submit" value="Pagar con Paypal $49.99 " class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area Start -->
        <div class="about-low-area section-padding30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>Nombre de tu restaurante</span>
                                <h2>Impresiona a tus clientes con un lema</h2>
                            </div>
                            <p>Cuentales acerca de ti y el motivo de que es lo que haces, dejalos impresionados con tu historia, del buen personal y la buena comida que tienes:</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                                <div class="single-caption mb-20">
                                    <div class="caption-icon">
                                        <span class="flaticon-restaurant"></span>
                                    </div>
                                    <div class="caption">
                                        <p>Chef estrella</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                                <div class="single-caption mb-20">
                                    <div class="caption-icon">
                                        <span class="flaticon-tools-and-utensils-1"></span>
                                    </div>
                                    <div class="caption">
                                        <p>Cantidad de Platos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                                <div class="single-caption mb-20">
                                    <div class="caption-icon">
                                        <span class="flaticon-hat"></span>
                                    </div>
                                    <div class="caption">
                                        <p>Especialidades</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                                <div class="single-caption mb-20">
                                    <div class="caption-icon">
                                        <span class="flaticon-restaurant"></span>
                                    </div>
                                    <div class="caption">
                                        <p>Equipo de Chef</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="assets/img/gallery/about.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->
        <!--? gallery Products Start -->
        <section class="gallery-area fix ">
            <!-- Gallery Top Start -->
            <div class="gallery-top section-bg pt-90 pb-40" data-background="assets/img/gallery/section_bg01.png">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="cl-xl-7 col-lg-8 col-md-10">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-70">
                                <span>Muestra tu Menu</span>
                                <h2>Ofrece tus maravillosos platillos</h2>
                            </div> 
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="properties__button">
                            <!--Nav Button  -->
                            <nav>                                                                         
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Especial</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Almuerzo</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> Desayuno </a>
                                    <a class="nav-item nav-link" id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab" aria-controls="nav-dinner" aria-selected="false"> Cena </a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Gallery Top End -->
            <!-- Gallery Bottom Start -->
            <div class="container-fluid p-0">
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row no-gutters">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                                        <div class="g-caption">
                                            <span>$25</span>
                                            <h4>Delicious Food</h4>
                                            <p>Ut enim ad minim veniam quis nostr.</p>
                                            <a href="#" class="btn order-btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                                        <div class="g-caption">
                                            <span>$25</span>
                                            <h4>Delicious Food</h4>
                                            <p>Ut enim ad minim veniam quis nostr.</p>
                                            <a href="#" class="btn order-btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                                                <div class="g-caption">
                                                    <span>$25</span>
                                                    <h4>Delicious Food</h4>
                                                    <p>Ut enim ad minim veniam quis nostr.</p>
                                                    <a href="#" class="btn order-btn">Order Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                                                <div class="g-caption">
                                                    <span>$25</span>
                                                    <h4>Delicious Food</h4>
                                                    <p>Ut enim ad minim veniam quis nostr.</p>
                                                    <a href="#" class="btn order-btn">Order Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card two -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row no-gutters">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                                        <div class="g-caption">
                                            <span>$25</span>
                                            <h4>Delicious Food</h4>
                                            <p>Ut enim ad minim veniam quis nostr.</p>
                                            <a href="#" class="btn order-btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                                        <div class="g-caption">
                                            <span>$25</span>
                                            <h4>Delicious Food</h4>
                                            <p>Ut enim ad minim veniam quis nostr.</p>
                                            <a href="#" class="btn order-btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                                                <div class="g-caption">
                                                    <span>$25</span>
                                                    <h4>Delicious Food</h4>
                                                    <p>Ut enim ad minim veniam quis nostr.</p>
                                                    <a href="#" class="btn order-btn">Order Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                                                <div class="g-caption">
                                                    <span>$25</span>
                                                    <h4>Delicious Food</h4>
                                                    <p>Ut enim ad minim veniam quis nostr.</p>
                                                    <a href="#" class="btn order-btn">Order Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card three -->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row no-gutters">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                                        <div class="g-caption">
                                            <span>$25</span>
                                            <h4>Delicious Food</h4>
                                            <p>Ut enim ad minim veniam quis nostr.</p>
                                            <a href="#" class="btn order-btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                                        <div class="g-caption">
                                            <span>$25</span>
                                            <h4>Delicious Food</h4>
                                            <p>Ut enim ad minim veniam quis nostr.</p>
                                            <a href="#" class="btn order-btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                                                <div class="g-caption">
                                                    <span>$25</span>
                                                    <h4>Delicious Food</h4>
                                                    <p>Ut enim ad minim veniam quis nostr.</p>
                                                    <a href="#" class="btn order-btn">Order Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                                                <div class="g-caption">
                                                    <span>$25</span>
                                                    <h4>Delicious Food</h4>
                                                    <p>Ut enim ad minim veniam quis nostr.</p>
                                                    <a href="#" class="btn order-btn">Order Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Four -->
                    <div class="tab-pane fade" id="nav-dinner" role="tabpanel" aria-labelledby="nav-dinner">
                        <div class="row no-gutters">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                                        <div class="g-caption">
                                            <span>$25</span>
                                            <h4>Delicious Food</h4>
                                            <p>Ut enim ad minim veniam quis nostr.</p>
                                            <a href="#" class="btn order-btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                                        <div class="g-caption">
                                            <span>$25</span>
                                            <h4>Delicious Food</h4>
                                            <p>Ut enim ad minim veniam quis nostr.</p>
                                            <a href="#" class="btn order-btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                                                <div class="g-caption">
                                                    <span>$25</span>
                                                    <h4>Delicious Food</h4>
                                                    <p>Ut enim ad minim veniam quis nostr.</p>
                                                    <a href="#" class="btn order-btn">Order Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                                                <div class="g-caption">
                                                    <span>$25</span>
                                                    <h4>Delicious Food</h4>
                                                    <p>Ut enim ad minim veniam quis nostr.</p>
                                                    <a href="#" class="btn order-btn">Order Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
            <!-- Gallery Bottom End -->
        </section>
        <!-- gallery Products End -->
        <!--? About-2 Area Start -->
        <div class="about-area2 section-padding30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="assets/img/gallery/about2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>Acerca de tu restaurante</span>
                                <h2>Cuentanos de tu historia</h2>
                            </div>
                            <p class="pera-top">Ut enim acgsd minim veniam, quxcis nostrud exercitation ullamco laboris nisi ufsit aliquip ex ea commodo consequat is aute irure m, quis nostrud exer</p>

                            <p  class="mb-65 pera-bottom">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected our, or randomised words which don't look even slightly believab If you are going to use a passage.</p>
                            <a href="about.html" class="border-btn">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About-2 Area End -->
        <!--? Our Services Start -->
        <div class="our-services section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Te ofrecemos</span>
                            <h2>Estos servicios</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-restaurant"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Fotos</a></h5>
                                <p>Sube fotos de los chef de tu local y destacalos</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services active text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tools-and-utensils-1"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Platillos</a></h5>
                                <p>Sube imagenes, coloca el precio, nombre y descripción</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-restaurant"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Categoria</a></h5>
                                <p>Selecciona que categorias usuaras para tus platillos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
        <!--? About-3 Start -->
        <div class="about-area3 pt-180 pb-170 section-bg" data-background="assets/img/gallery/section_bg03.png">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-6 col-md-9 col-sm-11">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-40">
                            <span>Correo de subscripción</span>
                            <h2>Para menternete al tanto de lo ultimo que tenemos</h2>
                            <p>Subscribete y recibe notificaciones al correo </p>
                        </div> 
                        <!--Hero form -->
                        <form action="#" class="search-box">
                            <div class="input-form">
                                <input type="text" placeholder="Your Email">
                            </div>
                            <div class="search-form">
                                <button>Subscribe</button>
                            </div>	
                        </form>	
                    </div>
                </div>
            </div>
        </div>
        <!-- About-3 End -->
        <!--? Blog Area Start -->
        <section class="blogs-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Destaca tus especiales</span>
                            <h2>Tus platillos</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blogs mb-100">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog1.png" alt="">
                            </div>
                            <div class="blog-cap">
                                <span class="color1">Fecha</span>
                                <h4><a href="blog_details.html">Texto de descripcio</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blogs mb-100">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog2.png" alt="">
                            </div>
                            <div class="blog-cap">
                                <span class="color1">Fecha</span>
                                <h4><a href="blog_details.html">Sube tus imagenes</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blogs mb-100">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog3.png" alt="">
                            </div>
                            <div class="blog-cap">
                                <span class="color1">Fecha</span>
                                <h4><a href="blog_details.html">Date a conocer con tus platos fuertes</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
</main>