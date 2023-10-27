<?php

class UserController
{
    public function index()
    {
        require_once "models/User.php";
        $user = new User();
        $users = $user->index();
        session_start();
        if(!isset($_SESSION['ID_User'])){
            header("Location:" . BASE_DIR . "User/iniciar/");
            exit;
        }
        else{
            require_once "views/users.php";
        }
        //require_once "views/users.php";
  
    }
    //----------------------------------------
    public function new()
    {
        require_once "views/newUser.php";
    }
   //----------------------------------------
    public function store()
    {
        require_once "models/User.php";
        $user = new User();
        $user->store($_POST);
    }
    //---------------------------------------
    public function mostrarD(){
        require_once "models/User.php";
        $user = new User();
        $usuario = $user->vista($_POST["ID_User"]);
        require_once "views/vistaUsuarios.php";
    }
    //----------------------------------------
    public function delete(){
        require_once "models/User.php";
        $user = new User();
        $usuarios = $user->delete($_POST["ID_User"]);
    }
    //------------------------------------------
    public function editar(){
        require_once "models/User.php";
        $user = new User();
        $usuario = $user->vista($_POST["ID_User"]);
        require_once "views/editarUsuario.php";
    }
    //------------------------------------------
    public function update(){
        require_once "models/User.php";
        $user = new User();
        $user->actualizar($_POST);
    }
    //-------------------------------------------
    public function iniciar(){
        require_once "models/User.php";
        $user = new User();
       // $usuario = $user->iniciar($_POST["ID_User"]);
        require_once "views/login.php";
    }
}