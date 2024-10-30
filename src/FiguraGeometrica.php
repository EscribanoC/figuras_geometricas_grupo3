<?php

require_once __DIR__ . '/../src/Punto.php';

// Define los métodos abstractos area() y perimetro(), que serán implementados por las subclases.
// No se puede instanciar directamente.

abstract class FiguraGeometrica
{
  // Atributos:
  public $nombre;

  // Constructor:
  public function __construct($nombre)
  {
    $this->nombre = $nombre;
  }

  // Getter
  public function get_nombre()
  {
    return $this->nombre;
  }

  // Métodos abstractos:
  // Calcular el área de la figura.
  abstract public function area();

  // Calcular el perímetro de la figura.
  abstract public function perimetro();
}
