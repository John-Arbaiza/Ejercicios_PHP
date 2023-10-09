<?php

$productos = "";
foreach ($cliente["favoritos"] as $producto) :
   $productos .= $producto . " ";
endforeach;

echo
     <<<OUPUT

     <main>
        
         <div class="conDetalle">
         <h1 class="title">Detalles del cliente: {$cliente["id"]} </h1>
          <div class="card">
             <div class="car-body">
             <fieldset disabled>
             <h6>Nombre:</h6>
             <input  class="form-control" type="text" Value=" {$cliente["userName"]}"><br>
             
             <h6>Apellido:</h6>
             <input  class="form-control" type="text" Value=" {$cliente["lastName"]}"><br>
         
             <h6>Fecha de nacimiento:</h6>
             <input  class="form-control" type="text" Value=" {$cliente["birthdate"]}"><br>

             <h6>Productos favoritos:</h6>
             <input  class="form-control" type="text" Value=" {$productos}"><br>

             <h6>Direccion:</h6>
             <input  class="form-control" type="text" Value=" {$cliente["direccionEnv"] }"><br>
             
             </fieldset>
             </div>
         </div>
        </div>
          
      </main>

      >>>
OUPUT
?>
