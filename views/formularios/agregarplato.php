<main>
        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Agregar Plato</h2>
                        </div> 
                    </div>
                </div>  
                <div class="row justify-content-center">
                    <div class="col">
                        <form action="#">
                            <div class="booking-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Descripción <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="aggplatodescripcion" placeholder="Ejemplo: Pancakes" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Pancakes'" required="" class="single-input">
                                    <h5>Precio <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="password" name="aggplatopprecio" placeholder="Ejemplo: 22.00" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: 22.00'" required="" class="single-input">
                                    <h5>Categoría <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="aggplatocategoria" placeholder="Ejemplo: Desayunos Ligth" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Desayunos Ligth'" required="" class="single-input">
                                    <p><FONT COLOR="red">(*) Obligatorio</FONT></p>
                                </div>
                                <div>
                                    <h5>Descripción <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="email" name="aggplatodescripcioncat" placeholder="Descripción de la categoría" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Descripción de la categoría'" required="" class="single-input">
                                    <h5>Foto agregar<FONT COLOR="red">(*) </FONT></h5>
                                    
                                     <input type="password" name="aggplatofoto" placeholder="poner para sacar de biblioteca de archivos xd" onfocus="this.placeholder = ''" onblur="this.placeholder = 'poner para sacar de biblioteca de archivos xd'" required="" class="single-input"> 
                                    
                                    <form action=“destino.php" method="post" enctype="multipart/form-data">
                                    <input class="form-control" type="file" id="formFile" name="foto" accept="image/*">
                                    <button type="submit" class="btn btn-primary">Subir</button>
                                    <form>

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