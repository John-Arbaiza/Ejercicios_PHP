<?php

//Definimos nuestra clase ClienteController
class ClienteController{

    //Metodo index
    public function index(){
        require_once "models/Cliente.php";
         //Instancia de la clase Cliente
         $cliente = new Cliente;
          // Llamando al metodo index de la clase Cliente (para obtener los usuarios)
          $clientes = $cliente->index();
          require_once "views/clientes.php";
    }

    //Metodo new (muestra el formulario para crear un nuevo usuario)
    public function new(){
        require_once "views/newCliente.php";
    }

    //Metodo store (guardara un nuevo usuario en nuestro archivo json)
    public function store(){
        require_once "models/Cliente.php";
        // Instancia de la clase Cliente
        $cliente = new Cliente();
        //Llamando al método 'store' de la clase Cliente (para guardar el usuario)
        $cliente->store();
    }

    public function showCliente($id){

        require_once "models/Cliente.php";
        $clientes = new Cliente();
        $cliente = $clientes->showClientes($id);

        if($cliente){
              require_once "views/detalle.php";
        }
        else{
            die("<h1>Metodo no definido - 404 Not Found</h1>");
        }

    }

    public function delete($id) {
    require_once "models/Cliente.php";
    $clientes = new Cliente();
    $clientes->delete($id);
   }

   public function editar($id){

    require_once "models/Cliente.php";
    $cliente = new Cliente();

   }

}