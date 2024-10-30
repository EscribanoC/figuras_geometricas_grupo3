<?php
include_once 'FiguraGeometrica.php';
require_once 'Punto.php';

// Clase Círculo que extiende FiguraGeometrica
class Circulo extends FiguraGeometrica
{
    private float $radio;
    private Punto $centro;

    // Constructor que recibe el centro y el radio del círculo
    public function __construct(String $nombre, Punto $centro, float $radio)
    {
        parent::__construct($nombre);
        $this->centro = $centro;
        $this->radio = $radio;
    }

    // Implementación del método getRadio
    public function getRadio(): float
    {
        return $this->radio;
    }

    // Implementación del método area
    public function area(): float
    {
        return pi() * pow($this->radio, 2);
    }

    // Implementación del método perimetro
    public function perimetro(): float
    {
        return 2 * pi() * $this->radio;
    }
}
