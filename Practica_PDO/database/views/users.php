<main>
    <h1 class="p-0 m-0 mt-5">Todos los Usuarios del Sistema</h1>
    <table class="table table-striped">
        <tr>
            <th>Usuario</th>
            <th>Password</th>
            <th>Opciones</th>
        </tr>
    <?php foreach($users as $user): 
    //Variables a emplear
    $vistaU = BASE_DIR . "User/mostrarD/";
    $eliminar = BASE_DIR . "User/delete/";
    $actualizarU = BASE_DIR . "User/editar/";
    echo
    
    <<<OUTPUT
            <tr>
                <td>{$user["username"]}</td>
                <td>{$user["password"]}</td>
                <td>

                <div class="d-flex mb-2">
                <form action="{$vistaU}" method="post">
                      <input type="hidden" name="ID_User" value="{$user["id"]}">
                      <button type="submit" class="btn btn-primary">ver datos</button>
                </form>

                <form action="{$eliminar}" method="post" style="margin-left:8px;">
                    <input type="hidden" name="ID_User" value="{$user["id"]}">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>

                <form action="{$actualizarU}" method="post" style="margin-left:8px;">
                    <input type="hidden" name="ID_User" value="{$user["id"]}">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </form>
                </div>
                </td>

            </tr>
    OUTPUT;
    endforeach; ?>
    </table>
</main>