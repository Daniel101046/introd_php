<?php
    function saludar(){
        echo "Hola, ";
    }

    saludar();

    function saludarUsuario($nombre){
        echo "Bienvendo " . $nombre;
    }

    saludarUsuario("Ríos ");

    
    function sumar($a, $b){
        return $a + $b;
    }

    $resultado = sumar(5, 10);

    echo $resultado;
?>