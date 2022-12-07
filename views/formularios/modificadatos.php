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
                        <form action="#">
                            <div class="booking-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Usuario <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="modificausuario" placeholder="Ejemplo: Jperez" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Jperez'" required="" class="single-input">
                                    <h5>Nombre de contacto</h5>
                                    <input type="text" name="modificanombre" placeholder="Ejemplo: Juan Perez" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Juan Perez'" required="" class="single-input">
                                    <h5>Cuenta de PayPal <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="email" name="modificacorreopaypal" placeholder="Ejemplo: jperezxd@dominio.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: jperezxd@dominio.com'" required="" class="single-input">
                                    <h5>Imagen de Fondo</h5>
                                    <input type="email" name="modificaurllogouser" placeholder="url del logo de imagen de fondo (800x800px)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'url del logo de imagen de fondo (800x800px)'" required="" class="single-input">
                                    <form action=“destino.php" method="post" enctype="multipart/form-data">
                                    <input class="form-control" type="file" id="formFile" name="foto" accept="image/*">
                                    <BR>
                                    <button type="submit" class="btn btn-primary">Subir</button>
                                    <form>

                                    <p><FONT COLOR="red">(*) Obligatorio</FONT></p>
                                </div>
                                <div>
                                    <h5>Correo electronico <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="email" name="modificacorreouser" placeholder="Ejemplo: jperezxd@dominio.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: jperezxd@dominio.com'" required="" class="single-input">
                                    <h5>Nombre Restaurante</h5>
                                    <input type="text" name="modificarestaurante" placeholder="Ejemplo: Restaurante JPerez" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Jperez'" required="" class="single-input">
                                    <h5>Logo de Restaurante</h5>
                                    <input type="email" name="modificaurllogorest" placeholder="url del logo de imagen de fondo (800x800px)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'url del logo de imagen de fondo (800x800px)'" required="" class="single-input">
                                </div>
                                
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