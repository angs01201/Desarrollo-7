<?php

class Cilindro{
    protected $pi;
    protected $diametro;
    protected $altura;
    protected $radio;
    function __construct($d, $a){
        $this->diametro = $d;
        $this->altura = $a;
        $this->pi = 3.141593;
        $this->radio=$d/2;
    }
    function obtener_radio(){
        return $this->radio;
    }
    function calc_volumen(){
        return $this->pi*$this->radio*$this->radio*$this->altura;
    }
    function calc_area(){
        return 2*$this->pi*$this->radio*($this->radio+$this->altura);
    }
}

class factorial{
    protected $factorial = 1;
    protected $numero;

    function __construct($num) {
        $this->numero = $num;
    }

    function obtenerFactorial(){

        for ($i=1; $i <= $this->numero; $i++) { 
           $this->factorial *= $i;
        }

        return $this->factorial;
    }

}

class ventas{
    protected $porcentaje;

    function __construct($porc) {
        $this->porcentaje = $porc;
    }

    function obtenerIcono(){
        if ($this->porcentaje >= 80) {
            return "verde.jpg";
        } elseif ($this->porcentaje >= 50 && $this->porcentaje <= 79) {
            return "amarillo.jpg";
        }
        else {
            return "rojo.jpg";
        }
    }

}

class arreglo{
    protected $arr;
    protected $posicion;
    protected $numMayor;
    protected $tamaño;

    function __construct($tam) {
        $this->arr = array();
        $this->posicion = 0;
        $this->numMayor = 0;
        $this->tamaño = $tam;
    }

    function generarArray(){
        for ($i=0; $i < $this->tamaño; $i++) { 
            array_push($this->arr, rand(1,100));
        }
        
        return $this->arr;
    }

    function obtenerPosicion(){
        for ($i=0; $i < count($this->arr) ; $i++) { 
         
            if ( $this->arr[$i] > $this->numMayor) {
                $this->numMayor = $this->arr[$i];
                $this->posicion = $i+1;
            }

        }
        return $this->posicion;
    }
}


