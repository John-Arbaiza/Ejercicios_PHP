<?php

class Red{

    /*---------------------------------| INFO |------------------------
      Encapsulamos propiedades y metodos mediante modificadores de acceso
      asi controlamos quien o que tiene acceso a los datos */

      public $nombre = "Router"; //Visible desde cualquier parte
      private $protocolo = "https"; // accesible solamente desde la clase Red(Esta clase)
      protected $puertom = 443; //Accesible desde esta clase y desde la clase Subred
}

//clase subRed que hereda de la clase Red
class subRed extends Red{
    //Tendremos disponible el nombre y el puerto
}

$red = new Red;
//En el entorno gobla solamente tenemos disponible nombre
echo $red->nombre;
echo "\n";