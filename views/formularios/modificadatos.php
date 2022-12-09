<main>
        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Modifica Tus Datos</h2>
                        </div> 
                    </div>
                </div>  
                <div class="row justify-content-center">
                    <div class="col-12">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo "index.php?c=" . seg::codificar("modifica") . "&m=" . seg::codificar("modificar") ?>">
                            <div class="booking-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Usuario <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="modificausuario" placeholder="Ejemplo: Jperez" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Jperez'" required="" class="single-input" value="<?php echo isset($resultados["usuario"]) ? $resultados["usuario"] : "" ?>" disabled>
                                    <h5>Nombre de contacto</h5>
                                    <input type="text" name="txtNombre" placeholder="Ejemplo: Juan Perez" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Juan Perez'" required="" class="single-input" value="<?php echo isset($resultados["nombre_contacto"]) ? $resultados["nombre_contacto"] : "" ?>">
                                    <h5>Cuenta de PayPal <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="email" name="txtCuentaPaypal" placeholder="Ejemplo: jperezxd@dominio.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: jperezxd@dominio.com'" required="" class="single-input" value="<?php echo isset($resultados["cuenta_paypal"]) ? $resultados["cuenta_paypal"] : "" ?>">
                                    <h5>Imagen de Fondo</h5> 
                                    <input class="form-control" type="file" id="formFile" name="imgFondo" accept="image/*">
                                    <BR>


                                    <p><FONT COLOR="red">(*) Obligatorio</FONT></p>
                                </div>
                                <div>
                                    <h5>Correo electronico <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="email" name="txtCorreo" placeholder="Ejemplo: jperezxd@dominio.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: jperezxd@dominio.com'" required="" class="single-input" value="<?php echo isset($resultados["correo"]) ? $resultados["correo"] : "" ?>">
                                    <h5>Nombre Restaurante</h5>
                                    <input type="text" name="txtNombreEmpresa" placeholder="Ejemplo: Restaurante JPerez" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Jperez'" required="" class="single-input" value="<?php echo isset($resultados["nombre_restaurante"]) ? $resultados["nombre_restaurante"] : "" ?>">
                                    <h5>Logo de Restaurante</h5>
                                    <input class="form-control" type="file" id="formFile" name="imgLogo" accept="image/*">
                                </div>
                                <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30">
                                    <button class="btn select-btn">Modificar</button>
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