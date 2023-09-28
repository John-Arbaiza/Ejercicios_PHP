<?php

// Definimos una clase llamada HomeContoller para gestionar la página de inicio.
class HomeController{

    // Método de la clase para mostrar la página de inicio. 
    public function showHome(){
        require_once "models/Home.php";
        //Instancia de  Home 
        $home = new Home();
         // Llamamos al método showHome() de la instancia de Home y almacenamos el resultado.
        $showHome = $home->showHome();
        require_once "views/home.php";
    }
}