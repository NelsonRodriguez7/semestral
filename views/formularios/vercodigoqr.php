<main>

        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Codigo Qr</h2>
                        </div> 
                    </div>
                </div>  
                <div class="row justify-content-center">
                    <div class="col-12">
                    </div>
				<p><?php echo $url . "<br>" ?></p>
				<div style="margin-left: auto;margin-right: auto;display: block;"><img src="<?php echo utils::generarqr($url) ?>" alt="">
					<br><a href="<?php echo utils::generarqr($url) ?>" target="_blank"><button type="button" class="btn btn-primary">Descargar</button></a>
				</div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Booking Room End-->
        <!-- About-2 Area End -->
       
</main>