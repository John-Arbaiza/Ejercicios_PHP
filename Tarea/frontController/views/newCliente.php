<main>
    <h1 class="p-0 m-0 mt-5">Agregando nuevos clientes </h1><br>

    <div class="row">
        <div class="col"></div>
        <div class="col">
             <div class="card">
                <div class="card-body">
                   <form action="<?= BASE_DIR; ?>Cliente/store/" method="post">
                        <div class="mb-3">
                            <input class="form-control" type="text" name="user" placeholder="Nombre">
                        </div>

                        <div class="mb-3">
                            <input class="form-control" type="text" name="apellido" placeholder="Apellido">
                        </div>

                        <div class="mb-3">
                            <input class="form-control" type="text" name="fechaNacim" placeholder="Fecha Nacimiento">
                        </div>

                        <div class="mb-2">
                            <label>Productos Favoritos:</label><br>
                            <input type="checkbox" name="productos[]" value="Ropa"> Ropa<br>
                            <input type="checkbox" name="productos[]" value="Juguetes"> Juguetes<br>
                            <input type="checkbox" name="productos[]" value="Electrónicos"> Electrónicos<br>
                            <input type="checkbox" name="productos[]" value="Hogar"> Hogar<br>
                            <input type="checkbox" name="productos[]" value="Herramientas"> Herramientas<br>
                            <input type="checkbox" name="productos[]" value="Muebles "> Muebles <br>
                        </div>

                        <div class="mb-3">
                            <input class="form-control" type="text" name="envio" placeholder="Dirección de envió ">
                        </div>
                        
                        <div class="mb-2 d-grid mx-sm-4">
                            <input class="btn btn-success " type="submit" value="Guardar">
                        </div>

                   </form>
                </div>
             </div>
        </div>
        <div class="col"></div>
    </div>

</main><br><br><br>