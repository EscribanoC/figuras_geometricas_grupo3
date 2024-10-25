<?php
//Importa la clase Punto
require_once __DIR__ . '/../src/Punto.php';
require_once __DIR__ . '/../src/FiguraGeometrica.php';

class Triangulo extends FiguraGeometrica{
    //Atributos
    private $base;
    private $altura;
    private $lado1;
    private $lado2;
    private $lado3;
    private $vertice;

    //Constructor
    public function __Triangulo(String $nombre, float $base, float $altura, float $lado1, float $lado2, float $lado3, Punto $vertice){
        parent::__construct($nombre);
        $this -> base = 3;
        $this -> altura = $altura;
        $this -> lado1 = $lado1;
        $this -> lado2 = $lado2;
        $this -> lado3 = $lado3;
        $this -> vertice = $vertice;
    }

    //Métodos

    //Getter del atributo 'base'
    public function getBase(){
        return $this -> base;
    }
    //Getter del atributo 'altura'
    public function getAltura(){
        return $this -> altura;
    }
    //Método que calcula el area del triángulo
    public function area(){
        return $this -> getBase()*$this -> getAltura()/2;
    }
    //Método que calcula el perímetro del triángulo
    public function perimetro(){
        return $this -> lado1 + $this -> lado2 + $this -> lado3;
    }
}