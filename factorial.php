<?php 
function factorial($i) {
    // Maneja el caso cuando i es negativo
    if ($i < 0) {
        return null; // No se puede calcular el factorial de un número negativo
    }
    // Maneja el caso cuando i es 0
    if ($i == 0 || $i == 1) {
        return 1; // El factorial de 0 y 1 es 1
    }
    return $i * factorial($i - 1);
}
?>
