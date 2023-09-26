<?php

class Financiera{

    /*La abstraccion se refiere a la capacidad de un objeto de "esconder" su complejida y solamente
    presentar su funcionamiento de una manera simple.Dicho de otra manera no interesa como lo hace 
    si no el saber que hace */

    public $salario;
    public $isss = 0.065;
    public $afp = 0.03;

    //Dejamos la complejida oculta
    private function realizarDeducciones(){
        return $this->salario - (($this->salario * $this->isss) + ($this->salario * $this->afp));
    }

    public function calcularSalarioNeto($salarioBruto){
        $this->salario = $salarioBruto;
        //Verifivcando si el saliro es menor a 500
        if($salarioBruto < 500){
            return $this->realizarDeducciones();
        }
        else{
            //Aca se podria implementar el calculo de la renta, por ejemplo
        }
    }
}

$sf = new Financiera;
echo $sf->calcularSalarioNeto(450);
echo "\n";
