<?php
class Persona {
 public $nombre;
 public $edad;
 public $ocupacion;
 // Constructor para inicializar atributos
 public function __construct($nombre, $edad, $ocupacion, $ciudad) {
 $this->nombre = $nombre;
 $this->ocupacion = $ocupacion;
 $this->ciudad = $ciudad;
    //insertar el condicional en caso de que la edad sea negativa
    if ($edad <= 0) {
            echo "<br>La edad no es válida ya que es negativa.</br>";
        } else {
            $this->edad = $edad;
        }
 }
 // Método que usa $this-> para acceder a los atributos
 public function presentarse() {
 return "Hola, mi nombre es $this->nombre, tengo $this->edad años, soy $this->ocupacion y soy de $this->ciudad. ";
 }
 // Método que usa $this-> para modificar un atributo
 public function cambiarOcupacion($nuevaOcupacion) {
 $this->ocupacion = $nuevaOcupacion;
 return "Ahora mi ocupación es: $this->ocupacion";
 }
}
?>

