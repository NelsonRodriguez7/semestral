<main>
        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle aaaaaaaaaaaaaaaaaaaaaaaaa-->
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Estos Son los Datos De Tu Pago</h2>   
                        </div> 
                        
                        <div class="section-tittle text-center mb-40"> 
                            <table class="table table-sm table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Correo</th>
                                    <th>Cuenta PayPal</th>
                                    <th>Monto Pagado</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($datos_paypal as $r) { ?>    
                                <tr>
                                    
                                    <td><?php echo $r->usuario ?></td>
                                    <td><?php echo $r->correo ?></td>
                                    <td><?php echo $r->cuenta_paypal ?></td>
                                    <td><?php echo $r->monto_pago ?></td>

                                </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>  
            </div>
        </div>

       
</main>