<?php

abstract class DataBase{

    //-----------------------------------------------
    //No es posible crear un cuerpo de la funcion
    abstract public function conectar(); 
    abstract public function desconectar();
    //-----------------------------------------------
}

/* Al crear la clase esta arrojara error ya que se esta obligando a implementarla
class Mysql extends DataBase{

}*/

//De esta manera no genera error ya que sea implementado los metodos 
class Postgres extends DataBase {
    public function conectar() {
        echo "Conectando al servidor";
    }

    public function desconectar() {
        echo "Eliminando la conexión";
    }
}

// Crear una instancia de la clase Postgres y usar sus métodos
$postgres = new Postgres();
$postgres->conectar();
echo "\n";
$postgres->desconectar();
echo "\n";