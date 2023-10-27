<main>
   
    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Password</th>
            <th></th>
        </tr>
    <?php foreach($usuario as $user):
    $actualiza = BASE_DIR . "User/update/";
    $regresar = BASE_DIR . "User/index/";
    echo
    
    <<<OUTPUT
            <tr>
              <form action="{$actualiza}" method="post">
                <td>
                   <input class="form-control" type="text" name="ID_User" value="{$user["id"]}" readonly>
                </td>
                <td>
                   <input class="form-control" type="text" name="user_name" value="{$user["username"]}">
                </td>
                <td>
                   <input class="form-control" type="text" name="pass" value="{$user["password"]}">
                </td>
                <td>
                  <button type="submit" class="btn btn-warning">Actualizar</button>
                  <button class="btn btn-warning">
                  <a href="{$regresar}" style="text-decoration:none; color:black;">Regresar</a>
                  </button> 
                </td>
              </form>
            </tr>
    OUTPUT;
    endforeach; ?>
    </table>
</main>