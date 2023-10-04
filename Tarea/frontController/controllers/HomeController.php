<?php

//Clase que nos ayudara a gestionar la página de inicio.
class HomeController{

    //metodo que se encargara del manejo de la página de inicio.
    public function index(){
        
        require_once "models/Home.php";
        $home = new Home();
        $index = $home->index();
        require_once "views/home.php";
    }
}