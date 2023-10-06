<main>
    <h1 class="title">
     Clientes del sistema
    </h1>
    <hr>

    <table class="table">
      <thead class="table-dark">
         <tr>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Fecha Nacimiento</th>
           <th>Productos Favoritos</th>
           <th>Dirección</th>
           <th>Opciones</th>
         </tr>
       </thead>

       <?php 
       if (is_array($clientes)) {
       foreach ($clientes["clientes"] as $cliente) : ?>
            <tr>
                <td><?= $cliente["userName"] ?></td>
                <td><?= $cliente["lastName"] ?></td>
                <td><?= $cliente["birthdate"] ?></td>
                <td>
                    <?php if (is_array($cliente["favoritos"])) : ?>
                        <?= implode(", ", $cliente["favoritos"]) ?>
                    <?php else : ?>
                        <?= $cliente["favoritos"] ?>
                    <?php endif; ?>
                </td>
                <td><?= $cliente["direccionEnv"] ?></td> 
                <td>

                    <?php 
                        $mostrar = BASE_DIR . "Cliente/" . $cliente["id"];
                        $eliminar = BASE_DIR . "Cliente/" . $cliente["id"] . "/delete";
                        $editarC = BASE_DIR . "Cliente/" . $cliente["id"] . "/editar"
                     ?>

                    <button type="button" class="btn btn-success ">
                       <a style="text-decoration:none; color:white;" href="<?= $mostrar ?>">Ver detalles</a>
                    </button>
                    <button type="button" class="btn btn-warning">
                    <a style="text-decoration:none; color:white;" href="<?= $editarC ?>"></a>   Actualizar
                    </button>
                    <button type="button" class="btn btn-danger">
                    <a style="text-decoration:none; color:white;" href="<?= $eliminar ?>">Eliminar</a>
                    </button>
                </td>
            </tr>
        <?php endforeach; 
        } else {
            echo "No hay usuarios disponibles.";
        }?>

    </table>
</main>
<br><br>