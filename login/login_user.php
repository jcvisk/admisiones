<?php

if (isset($_POST)) {
    require_once '../includes/conexion.php';
    
    $usuario = isset($_POST['user']) ? trim($_POST['user']) : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //comporbar las credenciales del ususario
    $sql = "SELECT * FROM usuarios where correo = '$usuario'";
    $login = mysqli_query($conexion, $sql);

    if ($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        
        //comprobar contraseña
       
        $verify = password_verify($password, $usuario['password']);

        if ($verify) {
            //crear una sesion para decir que el ususario esta logueado
            $_SESSION['usuario'] = $usuario;
            header( 'Location: ../dashboard_user.php' );
            //en caso de que se haya creado un error de sesion, borrarla
            if (isset($_SESSION['error_login'])) {
                session_unset();
            }
        }else{
            //sesion fallida
            $_SESSION['error_login'] = "<small class='form-text text-danger'>Contraseña incorrecta</small>";
            header( 'Location: ../index.php' );
        }
    }else{
        $_SESSION['error_login'] = "<small class='form-text text-danger'>El usuario no existe</small>";
        header( 'Location: ../index.php' );
    }
}



?>