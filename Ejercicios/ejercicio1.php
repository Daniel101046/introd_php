<?php
$minutos = 5; // cambia este valor

if ($minutos <= 3) {
    $costo = 300;
} else {
    $costo = 300 + ($minutos - 3) * 50;
}

echo "Total a pagar: $" . $costo;
?>