<main>
   
    <table class="table table-striped">
        <tr>
            <th>Usuario</th>
            <th>Password</th>
            <th></th>
        </tr>
    <?php foreach($usuario as $user):
    $regresar = BASE_DIR . "User/index/";
    echo
    
    <<<OUTPUT
    <h1 class="p-0 m-0 mt-5">datos del usuario:{$user["id"]}</h1>
            <tr>
                <td>{$user["username"]}</td>
                <td>{$user["password"]}</td>
                <td>
                  <button class="btn btn-dark">
                      <a href="{$regresar}" style="text-decoration:none; color:white;">Regresar</a>
                  </button> 
                </td>
            </tr>
    OUTPUT;
    endforeach; ?>
    </table>
</main>