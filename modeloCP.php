<?php

if(isset($_POST['t0']) && isset($_POST['P']) && isset($_POST['t1']) && isset($_POST['P1'])){
    $t0 = $_POST['t0'];
    $P = $_POST['P'];
    $t1 = $_POST['t1'];
    $P1 = $_POST['P1'];

    $C = $P / exp($t0);
    $k = log($P / $C) / $t1;
    $tiempo = log($P1 / $C) / $k;
    $Poblacion = $C * exp(($k * $t1));

    echo "Dada la población determinar el tiempo: " . $tiempo;
    echo "Dado el tiempo calcular la población: " . $Poblacion;
} else {
    echo "Por favor, complete todos los campos del formulario.";
}

?>
