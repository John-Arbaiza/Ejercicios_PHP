<?php

class CLiente{

        // Método index que se enacarga de leer y devolver los datos de la DB JSON
        public function index(){
            $data = file_get_contents(BASE_DIR . "database.json");
            $clientes = json_decode($data, true);
            return $clientes;
        }

     // Método store se encarga de agregar un nuevo usuario a la DB JSON
    public function store() {
        $data = file_get_contents(BASE_DIR . "database.json");
        $clientes = json_decode($data, true);

        if (!is_array($clientes["clientes"])) {
            $clientes["clientes"] = array();
        }

        //Definimos una variable que nos ayude con el Id
        $idF = 0;
        //Se encargara de encontrar el ultimo id si es que lo hay
        foreach ($clientes["clientes"] as $cliente) {
            //Verificamos si el id del cliente actual es mayor que el $idF
            if($cliente["id"] > $idF){
                  //Actualizamos el valor del $idF
                  $idF = $cliente["id"];
            }
        }

        //Incrementamos el id 
        $newID = $idF + 1;

        //se encarga de crear  un nuevo usuario con los datos enviados mediante POST
        array_push($clientes["clientes"],
            array(
                "id" => $newID,
                "userName" => $_POST["user"],
                "lastName" => $_POST["apellido"],
                "birthdate" => $_POST["fechaNacim"],
                "favoritos" => isset($_POST["productos"]) ? $_POST["productos"] : array(),
                "direccionEnv" => $_POST["envio"]

            )
        );

        // Escribe los datos actualizados de la base de datos JSON
        file_put_contents("database.json", json_encode($clientes));
        // Redirecciona a la página de index
        header('Location: ' . BASE_DIR . 'Cliente/index/');
    }

    public function showClientes($id){
        $data = file_get_contents(BASE_DIR . "database.json");
        $clientes = json_decode($data, true);
        $id = $id-1;
        $clienteExis = isset($clientes["clientes"][$id]) ? $clientes["clientes"][$id] : null;
        return $clienteExis;
    }

    public function delete($id) {
        $data = file_get_contents(BASE_DIR . "database.json");
        $clientes = json_decode($data, true);
    
        $id = $id - 1;
        unset($clientes["clientes"][$id]);
        file_put_contents("database.json", json_encode($clientes));
        header('Location: ' . BASE_DIR . 'Cliente/index/');
    }
        
}    