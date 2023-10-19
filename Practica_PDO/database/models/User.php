<?php

class User{

    public function index(){

        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {
            
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            //Consulta para seleccionar todos los resultados de la tabla users
            $users = PostgresConnection::selectAll("SELECT * FROM users");
            //Devuelve el resultado de la consulta
            return $users;
        }
        catch (Exception $e) {
            //En caso se error se muestra un mensaje y se termina la ejecucion
            die($e->getMessage());
        }
        finally {
            //se encarga de asegurar que se cierre la conexión
            PostgresConnection::close();
        }
    }
    //===============================================================================
    public function store($data) {

        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {

            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            //Consulta para insertar nuevos registros
            $sql = "INSERT INTO users(username, password, age) VALUES(:username, :password, :age)";
            //Ejecutara la consulta, pasando los datos como parametros
            PostgresConnection::insert($sql, $data);

            header("Location: " . BASE_DIR . "/User/index/");
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {   
            PostgresConnection::close();
        }
    }
    
}