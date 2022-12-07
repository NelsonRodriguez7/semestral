<main>     
        <!--? Booking Room Start-->
        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Inicia Sesión</h2>
                        </div> 
                    </div>
                </div>  
                <div class="row justify-content-center">
                    <div class="col-12">
                        <?php if($msg != "") {?>
                            <div class="alert alert-danger" role="alert">
                                <strong><?php echo $msg?></strong>
                            </div>
                        <?php }?>
                        <form method="POST" action="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("validar_usuario") ?>">
                            <div class="booking-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Usuario <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="text" name="loginusuario" placeholder="Ejemplo: Jperez" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: Jperez'" required="" class="single-input">
                                </div>
                                <div>
                                    <h5>Password <FONT COLOR="red">(*) </FONT></h5>
                                    <input type="password" name="loginpassword" placeholder="Ejemplo: J_perez_123" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ejemplo: aASk_a123ASjm'" required="" class="single-input">
                                    <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
                                </div>
                                <div class="single-select-box mb-30">
                                    <button class="btn select-btn">Iniciar</button>
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