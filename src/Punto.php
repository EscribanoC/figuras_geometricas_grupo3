<?php
class Punto{
    //Atributos
    private $x;
    private $y;

    //Constructor
    public function __construct(float $x, float $y){
        $this -> x = $x;
        $this -> y = $y;
    }

    //Getters de la clase

    //Getter del atributo 'x'
    public function getX(){
        return $this -> x;
    }

    //Getter del atributo 'y'
    public function getY(){
        return $this -> y;
    }

    //Métodos de la clase

    //Método para calcular la distancia entre dos puntos
    public function distancia(Punto $punto){
        $distancia = sqrt(pow(($punto -> x - $this -> x),2) + pow(($punto -> y - $this -> y),2)); //Calculo la distancia a través del teorema de Pitágoras.
        return $distancia;
    }
}
