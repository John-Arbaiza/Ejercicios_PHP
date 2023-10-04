<main>
    <h1 class="title mt-5">
    Usuarios del sistema
    </h1>
    <hr style="color:rgb(6, 91, 102);">

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
       if (is_array($users)) {
       foreach ($users["users"] as $user) : ?>
            <tr>
                <td><?= $user["userName"] ?></td>
                <td><?= $user["lastName"] ?></td>
                <td><?= $user["birthdate"] ?></td>
                <td>
                    <?php if (is_array($user["favoritos"])) : ?>
                        <?= implode(", ", $user["favoritos"]) ?>
                    <?php else : ?>
                        <?= $user["favoritos"] ?>
                    <?php endif; ?>
                </td>
                <td><?= $user["direccionEnv"] ?></td>
                <td>
                    <button type="button" class="btn btn-success">Agregar</button>
                    <button type="button" class="btn btn-warning">Actualizar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        <?php endforeach; 
        } else {
            echo "No hay usuarios disponibles.";
        }?>

    </table>
</main>