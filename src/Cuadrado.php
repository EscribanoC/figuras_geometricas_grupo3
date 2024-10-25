<?php
    include_once('FiguraGeometrica.php');
    class Cuadrado extends FiguraGeometrica {

        private $lado;
        private $esquina;

        // Constructor que recibe el punto y el lado del cuadrado
        public function __construct(Punto $punto, float $lado) {
            parent::__construct($punto);
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