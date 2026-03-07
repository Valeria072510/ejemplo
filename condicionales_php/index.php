<?php 
// Definimos dos números para comparar 
$numero1 = 20; 
$numero2 = 25; 
  
// Estructura IF 
echo "<h2>Ejemplo con IF</h2>"; 
if ($numero1 < $numero2) { 
    echo "El número $numero1 es menor que $numero2"; 
} 
  
// Estructura IF-ELSE 
echo "<h2>Ejemplo con IF-ELSE</h2>"; 
if ($numero1 > $numero2) { 
    echo "El número $numero1 es mayor que $numero2"; 
} else { 
    echo "El número $numero1 NO es mayor que $numero2"; 
} 
  
// Estructura IF-ELSEIF-ELSE con temperatura 
$temperatura = 0; 
echo "<h2>Ejemplo con IF-ELSEIF-ELSE</h2>"; 
  
if ($temperatura > 30) { 
    echo "Hace mucho calor 🥵"; 
} elseif ($temperatura >= 15 && $temperatura <= 30) { 
    echo "El clima es agradable 😊"; 
} elseif ($temperatura <=0) { 
    echo "Estamos en invierno hace demasiado frío 🥶"; 
} else {
    echo "Hace frío, pero no extremo ❄️"; 
}
?>