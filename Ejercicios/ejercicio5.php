<?php
function calcular($num) {
    $cuadrado = $num * $num;
    $cubo = $num * $num * $num;
    $raiz = sqrt($num);

    return [
        "cuadrado" => $cuadrado,
        "cubo" => $cubo,
        "raiz" => $raiz
    ];
}

// uso
$resultado = calcular(4);

echo "Cuadrado: " . $resultado["cuadrado"] . "<br>";
echo "Cubo: " . $resultado["cubo"] . "<br>";
echo "Raíz: " . $resultado["raiz"];
?>