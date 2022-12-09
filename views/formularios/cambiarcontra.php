<main>
        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Cambiar Contraseña</h2>
                        </div> 
                    </div>
                </div>  
                <div class="row justify-content-center">
                    <div class="col">
                        <form action="<?php echo "index.php?c=".seg::codificar("cambiarcontra")."&m=".seg::codificar("actualizar") ?>"method="POST">
                            <div class="booking-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Contraseña Actual <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="contra" placeholder="Ejemplo: Pancakes123" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Pancakes123'" required="" class="single-input">
                                    <h5>Repetir Contraseña <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="contrarepetida" placeholder="Ejemplo: Pancakes123" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Pancakes123'" required="" class="single-input">
                                    <p><FONT COLOR="red">(*) Obligatorio</FONT></p>
                                </div>
                                <div>
                                    <h5>Contraseña Nueva <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="nuevacontra" placeholder="Ejemplo: Pancakes123" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Pancakes123'" required="" class="single-input">				
                                    <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
                                </div>
                                
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30">
                                    <button class="btn select-btn">Actualizar</button>
                                    <?php if($imprimir_error != "") {?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $imprimir_error ?>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking Room End-->
        <!-- About-2 Area End -->
       
</main>