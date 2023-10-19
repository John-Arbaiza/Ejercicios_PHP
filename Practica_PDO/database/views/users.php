<main>
    <h1 class="p-0 m-0 mt-5">Todos los Usuarios del Sistema</h1>
    <table class="table table-striped">
        <tr>
            <th>Usuario</th>
            <th>Password</th>
            <th>Edad</th>
        </tr>
    <?php foreach($users as $user): echo
    
    <<<OUTPUT
            <tr>
                <td>{$user["username"]}</td>
                <td>{$user["password"]}</td>
                <td>{$user["age"]}</td>

            </tr>
    OUTPUT;
    endforeach; ?>
    </table>
</main>