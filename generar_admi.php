<?php
require_once 'includes/conexion.php';

$nombre = 'Juan';
$apellidoP = 'Vazquez';
$apellidoM = 'G';
$correo = 'admin@admin.com';
$password = 'demo';

echo 'encliptando la pass';
$encrypted_password = password_hash( $password, PASSWORD_BCRYPT, ['cost'=>4] );
echo 'saliendo de encliptando la pass';
echo 'entrando a sql';
//agregando ususario a la base de datos
$sql = "INSERT INTO administradores VALUES(NULL, '$nombre', '$apellidoP', '$apellidoM', '$correo', '$encrypted_password', 3);";
echo 'saliendo de sql';
echo 'entrando a mysqli_query';
$save_in_db = mysqli_query( $conexion, $sql );
echo 'saliendo de mysqli_query';
var_dump($save_in_db);

?>