<?php

class User {

    // Método index que se enacrga de leer y devolver los datos de la DB JSON
    public function index(){
        $data = file_get_contents(BASE_DIR . "database.json");
        $users = json_decode($data, true);
        return $users;
    }

    // Método store se encarga de agregar un nuevo usuario a la DB JSON
    public function store() {
        $data = file_get_contents(BASE_DIR . "database.json");
        $users = json_decode($data, true);

        if (!is_array($users["users"])) {
            $users["users"] = array();
        }

        //se encarga de crear  un nuevo usuario con los datos enviados mediante POST
        array_push($users["users"],
            array(
                "userName" => $_POST["user"],
                "lastName" => $_POST["apellido"],
                "birthdate" => $_POST["fechaNacim"],
                "favoritos" => isset($_POST["productos"]) ? $_POST["productos"] : array(),
                "direccionEnv" => $_POST["envio"]

            )
        );

        // Escribe los datos actualizados de la base de datos JSON
        file_put_contents("database.json", json_encode($users));
        // Redirecciona a la página de index
        header('Location: ' . BASE_DIR . 'User/index/');
    }
}