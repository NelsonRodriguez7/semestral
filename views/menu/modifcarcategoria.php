<main>
        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Modificar Categoría</h2>
                        </div> 
                    </div>
                </div>  
                <div class="row justify-content-center">
                    <div class="col">
                        <form action="<?php echo "index.php?c=".seg::codificar("listadocategoria")."&m=".seg::codificar("actualizar") ?>" method="POST">
                            <div class="booking-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Descripción <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="txtDescripcion" placeholder="Descripción de categoría" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Jperez'" required="" class="single-input" value="<?php echo isset($resultado->nombre_categoria) ? $resultado->nombre_categoria : "" ?>">
                                    <p><FONT COLOR="red">(*) Obligatorio</FONT></p>
                                </div>
                                <input type="hidden" name="_id" value="<?php echo $id ?>">
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