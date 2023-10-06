<?php

require_once "render/BaseLayout.php";
require_once "config/configControllers.php";
BaseLayout::renderHead();

//--------------------------------| Controlador Frontal |--------------------------

//Definimos un controlador por defecto
$controller = DEFAULT_CONTROLLER;

/* Tomamos el controlador requerido por el usuario
   en caso de no especificarse seleccionamos el controlador por defecto. */

   if(!empty($_GET['controller']))
   {
       $controller = $_GET['controller'];
   }

// Definimos una acción por defecto
$action = DEFAULT_ACTION;

/* Tomamos la acción requerida por el usuario 
   en caso de no especificarse seleccionamos la acción por defecto. */
if(!empty($_GET['action']))
   {
       $action = $_GET['action'];
   }

/* Ya tenemos el controlador y la acción
   Formamos el nombre del fichero que contiene nuestro controlador*/
   $fullController = CONTROLLERS_DIR . $controller . "Controller.php";
   $controller = $controller . "Controller";

// Si la variable ($controller) es un fichero lo requerimos
if(is_file($fullController))
  {
    require_once ($fullController);
    $printController = new $controller();
  }
else
  {
    die("<h1>Controlador no localizado - 404 Not Found</h1>");
  }

// Si la variable $action es una función la ejecutamos o detenemos el script
if(method_exists($printController, $action))
  {
    if($action == "showCliente"){
      $id = isset($_GET['id']) ? $_GET['id'] : null;
      $printController->$action($id);
    }
    else if($action === "delete"){
      $id = isset($_GET['id']) ? $_GET['id'] : null;
      $printController->$action($id);
    }
    else if($action === "editar"){
      $id = isset($_GET['id']) ? $_GET['id'] : null;
      $printController->$action($id);
    }
     else{
      $printController->$action();
     }
  }
else
  {
    die("<h1>Metodo no definido - 404 Not Found</h1>");
  }

BaseLayout::renderFoot();