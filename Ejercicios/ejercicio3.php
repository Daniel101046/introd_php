<?php
$dias = [
    "lunes" => "Lu",
    "martes" => "Ma",
    "miercoles" => "Mi",
    "jueves" => "Ju",
    "viernes" => "Vi",
    "sabado" => "Sa",
    "domingo" => "Do"
];

$claves = array_keys($dias);

for ($i = 0; $i < count($dias); $i++) {
    echo $dias[$claves[$i]] . " ";
}
?>