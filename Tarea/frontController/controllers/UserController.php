<?php

//Definimos nuestra clase UserController
class UserController{

    //metodo index
    public function index(){

        require_once "models/User.php";
        //Instancia de la clase User
        $user = new User();
         // Llamando al metodo index de la clase User (para obtener los usuarios)
         $users = $user->index();
         require_once "views/users.php";
    }

    //Metodo new (muestra el formulario para crear un nuevo usuario)
    public function new()
    {
        require_once "views/newUser.php";
    }

    //metodo store (guardara un nuevo usuario en nuestro archivo json)
    public function store(){

        require_once "models/User.php";
        // Instancia de la clase User
        $user = new User();
        //Llamando al método 'store' de la clase User (para guardar el usuario)
        $user->store();
    }

}