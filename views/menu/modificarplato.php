<main>
        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Modificar Plato</h2>
                        </div> 
                    </div>
                </div>  
                <div class="row justify-content-center">
                    <div class="col">
                        <form action="<?php echo "index.php?c=".seg::codificar("listadoplato")."&m=".seg::codificar("actualizar") ?>"method="POST" enctype="multipart/form-data">
                            <div class="booking-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Nombre <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="nombre_plato" placeholder="Ejemplo: Pancakes" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Pancakes'" required="" class="single-input"value="<?php echo isset($resultado->nombre_plato) ? $resultado->nombre_plato : "" ?>">
                                    <h5>Precio <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="precio_plato" placeholder="Ejemplo: 22.00" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: 22.00'" required="" class="single-input"value="<?php echo isset($resultado->precio_plato) ? $resultado->precio_plato : "" ?>">
                                    <h5>Categoría <FONT COLOR="red">(*) </FONT></h5>
                                    <select class="form-control" aria-label="Default select example" name="lstCategoria">
    
                                    <?php foreach ($lista_categoria as $r) { ?>
                                        <option value="<?php echo $r->_id ?>"><?php echo $r->nombre_categoria ?></option>
										<?php } ?>
									</select>
                                    <p><FONT COLOR="red">(*) Obligatorio</FONT></p>
                                </div>
                                <div>
                                    <h5>Descripción <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="descripcion_plato" placeholder="Descripción de la categoría" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Descripción de la categoría'" required="" class="single-input"value="<?php echo isset($resultado->descripcion_plato) ? $resultado->descripcion_plato : "" ?>">
                                    <h5>Foto agregar<FONT COLOR="red">(*) </FONT></h5>
            
                                    <br>
                                    <input class="form-control" type="file" id="formFile" name="txtFoto" accept="image/*">
                                    <input type="hidden" name="_id" value="<?php echo $id ?>">				
                                    <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
                                </div>
                                
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30">
                                    <button class="btn select-btn">Agregar</button>
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