<main>
        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle aaaaaaaaaaaaaaaaaaaaaaaaa-->
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Lista de Categoría</h2>   
                        </div> 
                        <div class="section-tittle text-center mb-40"> 
                        <a href="<?php echo "index.php?c=".seg::codificar("aggcategoria")."&m=".seg::codificar("aggcategoria") ?>" class="genric-btn danger-border radius">Agregar Categoría</a>
                        </div> 
                        <div class="section-tittle text-center mb-40"> 
                            <table class="table table-sm table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($resultado as $r) { ?>
                                <tr>
                                    <td><?php echo $r->nombre_categoria ?></td>
                                    <td><a href="<?php echo "index.php?c=" . seg::codificar("listadocategoria") . "&m=" . seg::codificar("modificar") . "&id=" . $r->_id ?>" class="genric-btn info-border radius">Modificar</a>
                                    <a href="<?php echo "index.php?c=" . seg::codificar("listadocategoria") . "&m=" . seg::codificar("eliminar") . "&id=" . $r->_id ?>" class="genric-btn danger-border radius">Eliminar</a></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>  
            </div>
        </div>

       
</main>