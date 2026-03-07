<?php
require 'Persona.php'; // Incluimos la clase Persona
// Crear instancia de Persona
$persona1 = new Persona("Mariana", -45, "Ama de casa", "Gomez Palacio, Durango");
// Mostrar información de la persona usando el método presentarse()
echo "<h2>Datos de la Persona</h2>";
echo "<p>" . $persona1->presentarse() . "</p>";
// Modificar la ocupación usando $this->
echo "<p>" . $persona1->cambiarOcupacion("Cocinera") . "</p>";
// Mostrar información actualizada
echo "<p>" . $persona1->presentarse() . "</p>";
?>
