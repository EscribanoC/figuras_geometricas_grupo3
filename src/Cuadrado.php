<?php
    include_once('FiguraGeometrica.php');
    include_once('Punto.php');
    class Cuadrado extends FiguraGeometrica {

        private $lado;
        private $esquina;

        // Constructor que recibe el punto y el lado del cuadrado
        public function __construct(string $nombre, Punto $esquina, float $lado) {
            parent::__construct($nombre);
            $this->esquina = $esquina;
            $this->lado = $lado;
        }

        // Implementación del método getLado
        public function getLado(): float {
            return $this->lado;
        }

        // Implementación del método area
        public function area(): float {
            return $this->lado * $this->lado;
        }

        // Implementación del método perimetro
        public function perimetro(): float {
            return 4 * $this->lado;
        }
    }