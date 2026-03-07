<?php
// Clase Producto
class Producto {

    // Propiedades del producto
    public $nombre;
    public $precio;
    public $categoria;
    public $stock;

    // Constructor: inicializa las propiedades del producto
    public function __construct($nombre, $precio, $categoria, $stock) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
        $this->stock = $stock;
    }

    // Método para aplicar un descuento al precio
    public function aplicarDescuento($porcentaje) {
        if ($porcentaje > 0 && $porcentaje <= 100) {
            $descuento = ($this->precio * $porcentaje) / 100;
            $this->precio -= $descuento;
        }
    }

    // Método para verificar si el producto está disponible
    public function estaDisponible() {
        return $this->stock > 0;
    }

    // Método para mostrar información completa del producto
    public function mostrarInfo() {
        return "Producto: {$this->nombre} <br>" .
               "Categoría: {$this->categoria} <br>" .
               "Precio: $" . number_format($this->precio, 2) . "<br>" .
               "Stock disponible: {$this->stock} unidades<br>" .
               "Disponible: " . ($this->estaDisponible() ? "Sí" : "No") . "<br><br>";
    }
}

// Crear tres objetos de la clase Producto
$producto1 = new Producto("Laptop HP", 14500, "Tecnología", 5);
$producto2 = new Producto("Silla ergonómica", 3200, "Oficina", 0);
$producto3 = new Producto("Mouse inalámbrico", 450, "Accesorios", 12);

// Aplicar descuentos
$producto1->aplicarDescuento(10); // 10% de descuento
$producto3->aplicarDescuento(5);  // 5% de descuento

// Mostrar información
echo "<h2>Información de Productos</h2>";
echo $producto1->mostrarInfo();
echo $producto2->mostrarInfo();
echo $producto3->mostrarInfo();
?>