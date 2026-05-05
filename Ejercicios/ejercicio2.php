<?php
$numeros = [];

// llenar array
for ($i = 1; $i <= 100; $i++) {
    $numeros[] = $i;
}

// mostrar
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . " ";
}
?>