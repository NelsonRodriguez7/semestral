<main>
        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle aaaaaaaaaaaaaaaaaaaaaaaaa-->
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Estos Son los Datos De Tus subscripciones</h2>   
                        </div> 
                        
                        <div class="section-tittle text-center mb-40"> 
                            <table class="table table-sm table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>Correo</th>
                                    <th>Fecha de subscripción</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($sub as $r) { ?>    
                                <tr>
                                    <td><?php echo $r->correo ?></td>
                                    <td><?php echo $r->fecha_registro ?></td>
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