<?php 

// Incluye los archivos necesarios desde la carpeta src
require_once __DIR__ . '/../src/FiguraGeometrica.php';
require_once __DIR__ . '/../src/Cuadrado.php';

// Función para ejecutar una aserción manual de igualdad
function assertEquals($expected, $actual, $testName) {
    if ($expected === $actual) {
        echo "[✔] $testName: Prueba pasada.<br>";
    } else {
        echo "[✘] $testName: Falló. Se esperaba '$expected', pero se obtuvo '$actual'<br>";
    }
}

// Pruebas unitarias simples para la clase Cuadrado

// Test 1: Prueba el cálculo del área de un cuadrado
$punto = new Punto(3, 2);
$cuadrado = new Cuadrado("Cuadrado de prueba", $punto, 5);
$expectedArea = 5.0 * 5;
$actualArea = $cuadrado->area();
assertEquals($expectedArea, $actualArea, "Prueba del cálculo del área");

// Test 2: Prueba el cálculo del perímetro de un cuadrado
$expectedPerimetro = 4.0 * 5;
$actualPerimetro = $cuadrado->perimetro();
assertEquals($expectedPerimetro, $actualPerimetro, "Prueba del cálculo del perímetro");

// Test 3: Prueba si se retorna correctamente el nombre del cuadrado
$expectedNombre = "Cuadrado de prueba";
$actualNombre = $cuadrado->nombre;
assertEquals($expectedNombre, $actualNombre, "Prueba de obtención del nombre");