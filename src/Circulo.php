<?php
include_once('FiguraGeometrica.php');

// Clase Círculo que extiende FiguraGeometrica
class Circulo extends FiguraGeometrica {
    private $radio;

    // Constructor que recibe el nombre y el radio del círculo
    public function __construct(string $nombre, float $radio) {
        parent::__construct($nombre); // Llamada al constructor de la clase padre
        $this->radio = $radio;
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