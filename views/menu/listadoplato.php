<main>
        <div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle aaaaaaaaaaaaaaaaaaaaaaaaa-->
                        <div class="section-tittle text-center mb-40"> 
                            <h2>Lista de Plato</h2>   
                        </div> 
                        <div class="section-tittle text-center mb-40"> 
                        <a href="<?php echo "index.php?c=".seg::codificar("listadoplato")."&m=".seg::codificar("registro") ?>" class="genric-btn danger-border radius">Agregar Platos</a>
                        </div> 
                        <div class="section-tittle text-center mb-40"> 
                            <table class="table table-sm table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Foto</th>
                                    <th>Creacion</th>
                                    <th>Actualizacion</th>
                                    <th>Acciones</th>
                                </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($resultado as $r) { ?>
                                <tr>
                                <td><?php echo $r->nombre_plato ?></td>
                                <td><?php echo $r->descripcion_plato ?></td>
                                <td>$<?php echo $r->precio_plato ?></td>
                                <td><img src="<?php echo $r->foto_plato ?>" alt="" style="width:100px"></td>
                                <td><?php echo $r->fecha_creacion ?></td>
                                <td><?php echo $r->fecha_actualizacion ?></td>
                                    
                                <td><a href="<?php echo "index.php?c=" . seg::codificar("plato") . "&m=" . seg::codificar("modificar") . "&id=" . $r->_id ?>"><button type="button" class="btn btn-primary btn-sm">Modificar</button></a>
                            <a href="<?php echo "index.php?c=" . seg::codificar("plato") . "&m=" . seg::codificar("eliminar") . "&id=" . $r->_id ?>"><button type="button" class="btn btn-danger btn-sm">Eliminar</button></a>
                              </td>

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