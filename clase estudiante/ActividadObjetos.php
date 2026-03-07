<?php
class Estudiante {
// Propiedades (características del estudiante)
public $nombre;
public $edad;
public $carrera;
public $promedio;
// Constructor - se ejecuta al crear un objeto
public function __construct($nombre, $edad, $carrera) {
$this->nombre = $nombre;
$this->edad = $edad;
$this->carrera = $carrera;
$this->promedio = 0.0;
}
// Métodos (comportamientos del estudiante)
public function presentarse() {
return "Hola, soy " . $this->nombre . ", tengo " . $this->edad .
" años y estudio " . $this->carrera;
}
public function establecerPromedio($promedio) {
$this->promedio = $promedio;
}
public function obtenerPromedio() {
return $this->promedio;
}
public function esBecario() {
return $this->promedio >= 8.5;
}
}
// Crear el primer objeto estudiante
$estudiante1 = new Estudiante("María García", 19, "Ingeniería Informatica");
// Crear el segundo objeto estudiante
$estudiante2 = new Estudiante("Carlos López", 20, "Administración");
// Crear el tercer objeto estudiante
$estudiante3 = new Estudiante("Ana Torres", 18, "Diseño Gráfico");
//Crea 2 estudiantes más
$miEstudiante = new Estudiante("Cristian Camacho", 18, "Ingenieria Informatica");
$otroEstudiante = new Estudiante("Brenda Herrera", 19, "Maestra Primaria");

// Mostrar información básica de los estudiantes
echo "<h2>Información de los Estudiantes</h2>";
echo "<p>Estudiante 1: " . $estudiante1->nombre . "</p>";
echo "<p>Estudiante 2: " . $estudiante2->nombre . "</p>";
echo "<p>Estudiante 3: " . $estudiante3->nombre . "</p>";
echo "<p>miEstudiante: " . $miEstudiante->nombre . "</p>";
echo "<p>otroEstudiante: " . $otroEstudiante->nombre . "</p>";

// Establecer promedios para cada estudiante
$estudiante1->establecerPromedio(9.2);
$estudiante2->establecerPromedio(7.8);
$estudiante3->establecerPromedio(8.7);
$miEstudiante->establecerPromedio(8.0);
$otroEstudiante->establecerPromedio(9.5);
echo "<h2>Presentaciones de los Estudiantes</h2>";
// Hacer que cada estudiante se presente
echo "<p>" . $estudiante1->presentarse() . "</p>";
echo "<p>" . $estudiante2->presentarse() . "</p>";
echo "<p>" . $estudiante3->presentarse() . "</p>";
echo "<p>" . $miEstudiante->presentarse() . "</p>";
echo "<p>" . $otroEstudiante->presentarse() . "</p>";

echo "<h2>Información Académica</h2>";
// Mostrar promedios y status de beca
echo "<p>" . $estudiante1->nombre . " - Promedio: " .
$estudiante1->obtenerPromedio() . " - Becario: " .
($estudiante1->esBecario() ? "Sí" : "No") . "</p>";
echo "<p>" . $estudiante2->nombre . " - Promedio: " . 
$estudiante2->obtenerPromedio() . " - Becario: " .
($estudiante2->esBecario() ? "Sí" : "No") . "</p>";
echo "<p>" . $estudiante3->nombre . " - Promedio: " .
$estudiante3->obtenerPromedio() . " - Becario: " .
($estudiante3->esBecario() ? "Sí" : "No") . "</p>";

echo "<p>" . $miEstudiante->nombre . " - Promedio: " .
$miEstudiante->obtenerPromedio() . " - Becario: " .
($miEstudiante->esBecario() ? "Sí" : "No") . "</p>";

echo "<p>" . $otroEstudiante->nombre . " - Promedio: " .
$otroEstudiante->obtenerPromedio() . " - Becario: " .
($otroEstudiante->esBecario() ? "Sí" : "No") . "</p>";
