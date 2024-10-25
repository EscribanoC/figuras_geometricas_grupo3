<?php
include_once('FiguraGeometrica.php');

// Clase Círculo que extiende FiguraGeometrica
class Circulo extends FiguraGeometrica{
    private float $radio;
    private punto $centro;

    // Constructor que recibe el centro y el radio del círculo
    public function __construct(punto $centro, float $radio) {
        $this->centro = $centro;
        $this->radio = $radio;
    }

    //Implementación del método getRadio
    public function getRadio(): float{
        return $this -> radio;
    }

    // Implementación del método area
    public function area(): float {
        return pi() * pow($this->radio, 2);
    }

    // Implementación del método perimetro
    public function perimetro(): float {
        return 2 * pi() * $this->radio;
    }
}
