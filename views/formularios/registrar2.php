<main>
        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Crea tu cuenta</h2>
                        </div> 
                    </div>
                </div>  
                <div class="row justify-content-center">
                    <div class="col-12">
                        <form method="POST" action="<?php echo "index.php?c=".seg::codificar("registrar")."&m=".seg::codificar("insertar") ?>" >
                            <div class="booking-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Usuario <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="registrousuario" placeholder="Ejemplo: Jperez" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Jperez'" required="" class="single-input">
                                    <h5>Password <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="password" name="registropassword" placeholder="Ejemplo: J_perez_123" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: aASk_a123ASjm'" required="" class="single-input">
                                    <h5>Nombre de contacto</h5>
                                    <input type="text" name="registronombre" placeholder="Ejemplo: Juan Perez" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Juan Perez'"  class="single-input">
                                    <h5>Cuenta de PayPal <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="email" name="registrocorreopaypal" placeholder="Ejemplo: jperezxd@dominio.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: jperezxd@dominio.com'" required="" class="single-input">
                                    <p><FONT COLOR="red">(*) Obligatorio</FONT></p>
                                </div>
                                <div>
                                    <h5>Correo electronico <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="email" name="registrocorreouser" placeholder="Ejemplo: jperezxd@dominio.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: jperezxd@dominio.com'" required="" class="single-input">
                                    <h5>Repetir password <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="password" name="registrorepetirpassword" placeholder="Ejemplo: J_perez_123" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: J_perez_123'" required="" class="single-input">
                                    <h5>Nombre Restaurante</h5>
                                    <input type="text" name="registrorestaurante" placeholder="Ejemplo: Restaurante JPerez" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Jperez'" required="" class="single-input">
                                    <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
                                </div>
                                
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30">
                                    <button class="btn select-btn">Registrarse</button>
                                    <br>
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