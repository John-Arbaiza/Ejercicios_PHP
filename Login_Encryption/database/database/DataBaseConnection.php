<?php

//Definimos una interfaz DataBaseConnection
interface DataBaseConnection{

    //Establce la conexion
    public static function connect($host, $port, $dbname, $user, $pass);
    //Metodo que permite seleccionar todos los registros a partir de una consulta sql
    public static function selectAll($sql);
    //Metodo para insertar datos 
    public static function insert($sql, $data);
    //Cierra la conexion
    public static function close();

}