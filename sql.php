<?php
require_once 'includes/conexion.php';

$sql = "SELECT * FROM usuarios a INNER JOIN datosacademicos b ON a.id = b.id;";
    $prospectos = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($prospectos && mysqli_num_rows($prospectos) >= 1) {
        $resultado = $prospectos;
    }
    $prospecto = mysqli_fetch_assoc( $resultado );
    var_dump($prospecto);
    die();


?>