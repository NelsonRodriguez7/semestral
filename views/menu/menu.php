 <main>
        <!--? gallery Products Start -->
        <section class="gallery-area fix ">
            <!-- Gallery Top Start -->
            <div class="gallery-top section-bg pt-90 pb-40" data-background="assets/img/gallery/section_bg01.png">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="cl-xl-7 col-lg-8 col-md-10">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-70">
                                <span>Bienvenido a <?php echo $nombre_empresa ?></span>
                                <h2>Este es nuesto Menu</h2>
                            </div> 
                        </div>
                    </div>
                    
                </div>
            </div>
                             
            <!-- Gallery Top End -->
            <!-- Gallery Bottom Start -->
            <div class="container-fluid p-0">
                <!-- Nav Card -->
                <br>
                <?php foreach ($listaCat as $categoria) { ?>
                <center><h4><?php echo $categoria["nombre_categoria"] ?></h4></center>
                    <?php $id_categoria = $categoria["_id"]?>
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav_home" role="tabpanel" aria-labelledby="nav-home-tab">
                     
                        <div class="row no-gutters">
                            <?php foreach ($listaPlat as $plato) { ?>
                            <?php if((new MongoDB\BSON\ObjectId($plato->_id_categoria) == $id_categoria)){?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img" style="background-image: url(<?php echo $plato->foto_plato?>);"></div>
                                        <div class="g-caption">
                                            <span><?php echo $plato->precio_plato?></span>
                                            <h4><?php echo $plato->nombre_plato?></h4>
                                            <p><?php echo $plato->descripcion_plato?></p>
                                            <a href="#" class="btn order-btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <?php }?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- Gallery Bottom End -->
        </section>
        <!-- gallery Products End -->
        <!--? Our Services Start -->
        <div class="our-services section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Servicees We Offer</span>
                            <h2>Our Best Services</h2>
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
                                <h5><a href="#">Best Chef</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services active text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tools-and-utensils-1"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Quality Food</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-restaurant"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Perfect Cook</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
    </main>
    <footer>
      