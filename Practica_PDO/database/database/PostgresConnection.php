<?php

require_once "DataBaseConnection.php";

//Definimos una clase PostgresConnection que implementa la interfaz DataBaseConnection
class PostgresConnection implements DatabaseConnection{

    //Permite almacenar la conexión a la base de datos
    private static $connection;

    //Metodo para establecer la conexion con Postgresql
    public static function connect($host, $port, $dbname, $user, $pass) : PDO{

        try {
            #Data Source Name
            $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
            #Realiazamos la conexión
            self::$connection = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return self::$connection;

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    } 
    //=================================================================================
    //Metodo encargado de seleccionar los registros
    public static function selectAll($sql){
        //Prepara la consulta
        $stmt = self::$connection->prepare($sql);
        //Ejecuta la consulta
        $stmt->execute();
        //Devuelve los resultados en forma de arreglo asociativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //=================================================================================
    //Metodo para insertar datos
    public static function insert($sql, $data){
        //Preparamos la consulta
        $stmt = self::$connection->prepare($sql);
        //la ejecutamos
        $stmt->execute(
            array(
                ':username' => $data["user"],
                ':password' => $data["pass"], 
            )
            );
    }
    //================================================================================
    //Metodo para visualizar un usuario 
    public static function mostrarD($sql){
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //================================================================================
    //Metodo para eliminar 
    public static function eliminarUser($sql){
        $stml = self::$connection->prepare($sql);
        $stml->execute();
    }
    //=================================================================================
    //Metodo para poder actualizar la informacion del usuario
    public static function actualizando($sql){
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
    }
    //=================================================================================
    //Metodo para cerrar la conexión
    public static function close() {
        self::$connection = null;
    }
}