<main><br>
    <div class="row">
        <div class="col"></div>
        <div class="col">
        <h2 class="p-0 m-0 mt-5 title">Actualizando datos del cliente</h2>
             <div class="card">
                <div class="card-body">
                   <form action="<?= BASE_DIR; ?>Cliente/editEnable" method="post">
                        <div class="mb-2">
                        <h6>Id:</h6>
                        <input class="form-control" type="text" name="user_id" value="<?php echo $cliente["id"]; ?>" readonly>
                        </div>
                        <div class="mb-2">
                        <label>Nombre:</label><br>
                            <input class="form-control" type="text" name="user" value="<?php echo $cliente["userName"]?>">
                        </div>

                        <div class="mb-2">
                        <label>Apellido:</label><br>
                            <input class="form-control" type="text" name="apellido" value="<?php echo $cliente["lastName"]?>">
                        </div>

                        <div class="mb-2">
                        <label>Fecha de nacimiento:</label><br>
                            <input class="form-control" type="text" name="fechaNacim" value="<?php echo $cliente["birthdate"]?>">
                        </div>

                        <div class="mb-2 productoFavorito">
                        <label>Productos Favoritos:</label><br>
                        <div class="producto-grid">
                        <div>
                          <input class="form-check-input" type="checkbox" name="productos[]" value="Ropa"> Ropa
                        </div>
                        <div>
                          <input class="form-check-input" type="checkbox" name="productos[]" value="Juguetes"> Juguetes
                        </div>
                        <div>
                          <input class="form-check-input" type="checkbox" name="productos[]" value="Electrónicos"> Electrónicos
                        </div>
                        <div>
                          <input class="form-check-input" type="checkbox" name="productos[]" value="Hogar"> Hogar
                        </div>
                        <div>
                          <input class="form-check-input" type="checkbox" name="productos[]" value="Herramientas"> Herramientas
                        </div>
                       <div>
                         <input class="form-check-input" type="checkbox" name="productos[]" value="Muebles"> Muebles
                       </div>
                       </div>
                    </div>

                        <div class="mb-2">
                        <label>Direccion:</label><br>
                            <input class="form-control" type="text" name="envio" value="<?php echo $cliente["direccionEnv"]?>">
                        </div>
                        
                        <div class="mb-2 d-grid mx-sm-4">
                           <input class="btn btn-success " type="submit" value="Actualizar">
                           <a href="<?= BASE_DIR; ?>Cliente/" class="btn btn-danger mt-3">Cancelar</a>
                        </div>

                   </form>
                </div>
             </div>
        </div>
        <div class="col"></div>
    </div>

</main> <br> <br> <br> <br>
