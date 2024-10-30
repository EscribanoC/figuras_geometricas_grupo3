<?php
// Incluye los archivos necesarios desde la carpeta src
require_once __DIR__ . '/../src/FiguraGeometrica.php';
require_once __DIR__ . '/../src/Triangulo.php';

// Función para ejecutar una aserción manual de igualdad
function assertEquals($expected, $actual, $testName)
{
    if ($expected === $actual) {
        echo "[✔] $testName: Prueba pasada.<br>";
    } else {
        echo "[✘] $testName: Falló. Se esperaba '$expected', pero se obtuvo '$actual'<br>";
    }
}

// Pruebas unitarias simples para la clase Triángulo

// Test 1: Prueba el cálculo del área de un triángulo
$triangulo = new Triangulo("Triángulo de prueba", 4, 3, 2, 4, 2, new Punto(2, 3));
$expectedArea = 4.0 * 3 / 2;
$actualArea = $triangulo->area();
assertEquals($expectedArea, $actualArea, "Prueba del cálculo del área");

// Test 2: Prueba el cálculo del perímetro de un Triángulo
$expectedPerimetro = 2 + 4 + 2.0;
$actualPerimetro = $triangulo->perimetro();
assertEquals($expectedPerimetro, $actualPerimetro, "Prueba del cálculo del perímetro");

// Test 3: Prueba si se retorna correctamente el nombre del Triángulo
$expectedNombre = "Triángulo de prueba";
$actualNombre = $triangulo->get_nombre();
assertEquals($expectedNombre, $actualNombre, "Prueba de obtención del nombre");
