<main>
        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Informacion Importante</h2>
                            <span>Atención</span>
                        </div> 
                        <div class="section-tittle text-center mb-40"> 
                            <div class="alert alert-warning" role="alert">
                                <strong><?php echo $mensaje ?></strong>
                                <br>
                                <br>
                                <a href="<?php echo "index.php?c=".seg::codificar("principal")."&m=".seg::codificar("index") ?>" class="genric-btn danger-border radius">Volver al inicio</a>
                            </div>
                        </div> 
                    </div>
                </div>  
            </div>
        </div>

       
</main>