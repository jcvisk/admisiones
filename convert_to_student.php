<?php
if ( isset( $_GET ) ) {
    require_once 'includes/conexion.php';
    require_once 'includes/helpers.php';

    $id = isset( $_GET['id'] ) ? (INT)mysqli_real_escape_string( $conexion, $_GET['id'] ) : '' ;

    /*Tabla clientes*/
    $sqlClientes = "UPDATE usuarios SET idtipousuario = 2 WHERE id = $id;";
    $changeStatus = mysqli_query( $conexion, $sqlClientes );
    if ( $changeStatus ) {
        $_SESSION['change_status_successful'] = "<div class='alert alert-success' role='alert'>El alumno a sido admitido.</div>";
        header( 'Location: prospecto_detalle.php?id='.$id );
    }else{
        echo 'Error al guardar distribuidor'.'<br>';
        $e = mysqli_error($conexion);
        var_dump($e);
        die();
    }

}
?>