<?php
//Mostrar errores

function mostrarErrores ( $errores, $campo ) {
    $alert = '';
    if ( isset( $errores[$campo] ) && !empty( $campo ) ) {
        $alert = "<small class='form-text text-danger'>".$errores[$campo].'</small>';
    }
    return $alert;
}

//Borrar errores mostrados

function borrarErrores() {
    if($_SESSION['errores']){
        $_SESSION['errores'] = null;
    }
    if($_SESSION['error_login']){
        $_SESSION['error_login'] = null;
    }
    if($_SESSION['change_status_successful']){
        $_SESSION['change_status_successful'] = null;
    }
}

//Obtener el ID del ultimo registro de la tabla ( solo se utiliza para registrar los datos )

function getid( $conexion, $nameTable ) {
    $sql = "SELECT id FROM $nameTable ORDER BY id DESC LIMIT 1;";
    $getId =  mysqli_query( $conexion, $sql );

    if ( $getId && mysqli_num_rows( $getId ) == 1 ) {

        $tableId = mysqli_fetch_assoc( $getId );

        $id = ( int )$tableId['id'];
    }

    return $id;
}

//mostrar la lista de los prospectos

function listarProstectos( $conexion ) {
    $sql = 'SELECT * FROM datosacademicos a INNER JOIN usuarios b ON a.id = b.iddatosacademicos WHERE b.idtipousuario = 1;';
    $prospectos = mysqli_query( $conexion, $sql );

    $resultado = array();
    if ( $prospectos && mysqli_num_rows( $prospectos ) >= 1 ) {
        $resultado = $prospectos;
    }

    return $resultado;
}

//mostrar la lista de los alumnos
function listarAlumnos( $conexion ) {
    $sql = 'SELECT * FROM datosacademicos a INNER JOIN usuarios b ON a.id = b.iddatosacademicos WHERE b.idtipousuario = 2;';
    $prospectos = mysqli_query( $conexion, $sql );

    $resultado = array();
    if ( $prospectos && mysqli_num_rows( $prospectos ) >= 1 ) {
        $resultado = $prospectos;
    }

    return $resultado;
}

//Generar contraseña aleatoria

function generatePassword() {
    //Carácteres para la contraseña
    $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
    $password = '';
    //Reconstruimos la contraseña
    for ( $i = 0; $i<9; $i++ ) {
        //obtenemos un caracter aleatorio escogido de la cadena de caracteres
        $password .= substr( $str, rand( 0, 62 ), 1 );

    }

    return $password;
}

//Obtener datos de la tabla usuarios

function getProspecto( $conexion, $id ) {
    $resultado = array();
    $sql = "SELECT * FROM usuarios WHERE id = $id;";
    $datos = mysqli_query( $conexion, $sql );

    $usuarios = array();
    if ( $datos && mysqli_num_rows( $datos ) >= 1 ) {
        $usuarios = mysqli_fetch_assoc( $datos );
    }
    $idusuario = $usuarios['id'];
    $iddatosubicacion = $usuarios['iddatosubicacion'];
    $iddatosfamiliares = $usuarios['iddatosfamiliares'];
    $iddatosfinancieros = $usuarios['iddatosfinancieros'];
    $iddatosreligion = $usuarios['iddatosreligion'];
    $identerado = $usuarios['identerado'];
    $iddatosacademicos = $usuarios['iddatosacademicos'];
    $iddatossalud = $usuarios['iddatossalud'];
    $iddatospersonales = $usuarios['iddatospersonales'];
    //$idtipousuario = $usuarios['idtipousuario'];
    /*---------------------datosubicacion-------------------------*/
    $sql = "SELECT * FROM datosubicacion WHERE id = $iddatosubicacion ;";
    $datos = mysqli_query( $conexion, $sql );

    $datosUbicacion = array();
    if ( $datos && mysqli_num_rows( $datos ) >= 1 ) {
        $datosUbicacion = mysqli_fetch_assoc( $datos );
    }

    /*---------------------datosubicacion del patrocinador-------------------------*/
    $sql = "SELECT datosubicacion.pais AS paispatrocinador,
                   datosubicacion.calle AS callepatrocinador,
                   datosubicacion.colonia AS coloniapatrocinador,
                   datosubicacion.ciudad AS ciudadpatrocinador,
                   datosubicacion.estado AS estadopatrocinador,
                   datosubicacion.codigopostal AS codigopostalpatrocinador,
                   datosubicacion.telefono AS telefonopatrocinador
                    FROM usuarios INNER JOIN datosfinancieros ON usuarios.id = datosfinancieros.id
                    INNER JOIN datosubicacion ON datosfinancieros.iddatosubicacion = datosubicacion.id WHERE datosubicacion.id = ($iddatosubicacion - 1);";
    $datos = mysqli_query( $conexion, $sql );

    $datosUbicacionPatrocinador = array();
    if ( $datos && mysqli_num_rows( $datos ) >= 1 ) {
        $datosUbicacionPatrocinador = mysqli_fetch_assoc( $datos );
    }
    /*---------------------datosfamiliares-------------------------*/
    $sql = "SELECT 
    nombrepadre,
    apellidopaternopadre,
    apellidomaternopadre,
    direccionpadre,
    celularpadre,
    ocupacionpadre,
    nombremadre,
    apellidopaternomadre,
    apellidomaternomadre,
    direccionmadre,
    celularmadre,
    ocupacionmadre,
    estadocivil AS edocivilpadres
    FROM datosfamiliares WHERE id = $iddatosfamiliares ;";
    $datos = mysqli_query( $conexion, $sql );

    $datosFamiliares = array();
    if ( $datos && mysqli_num_rows( $datos ) >= 1 ) {
        $datosFamiliares = mysqli_fetch_assoc( $datos );
    }
    /*---------------------datosfinancieros-------------------------*/
    $sql = "SELECT 
    nombre AS nombrepatrocinador,
    apellidopaterno AS apellidoppatrocinador,
    apellidomaterno AS apellidompatrocinador,
    ocupacion, 
    correo AS correopatrocinador
     FROM datosfinancieros WHERE id = $iddatosfinancieros ;";
    $datos = mysqli_query( $conexion, $sql );

    $datosFinancieros = array();
    if ( $datos && mysqli_num_rows( $datos ) >= 1 ) {
        $datosFinancieros = mysqli_fetch_assoc( $datos );
    }
    /*---------------------datosreligion-------------------------*/
    $sql = "SELECT * FROM datosreligion WHERE id = $iddatosreligion ;";
    $datos = mysqli_query( $conexion, $sql );

    $datosReligion = array();
    if ( $datos && mysqli_num_rows( $datos ) >= 1 ) {
        $datosReligion = mysqli_fetch_assoc( $datos );
    }
    /*---------------------enterado-------------------------*/
    $sql = "SELECT descripcion AS enterado FROM enterado WHERE id = $identerado ;";
    $datos = mysqli_query( $conexion, $sql );

    $enterado = array();
    if ( $datos && mysqli_num_rows( $datos ) >= 1 ) {
        $enterado = mysqli_fetch_assoc( $datos );
    }
    /*---------------------datosacademicos-------------------------*/
    $sql = "SELECT * FROM datosacademicos WHERE id = $iddatosacademicos ;";
    $datos = mysqli_query( $conexion, $sql );

    $datosAcademicos = array();
    if ( $datos && mysqli_num_rows( $datos ) >= 1 ) {
        $datosAcademicos = mysqli_fetch_assoc( $datos );
    }
    /*---------------------datossalud------------------------- $iddatossalud */
    $sql = "SELECT * FROM datossalud WHERE id = $iddatossalud ;";
    $datos = mysqli_query( $conexion, $sql );

    $datosSalud = array();
    if ( $datos && mysqli_num_rows( $datos ) >= 1 ) {
        $datosSalud = mysqli_fetch_assoc( $datos );
    }
    /*---------------------tiposangre------------------------- $iddatossalud */
    $sql = "SELECT tiposangre.descripcion AS tiposangre
                FROM usuarios INNER JOIN datossalud ON usuarios.id = datossalud.id
                    INNER JOIN tiposangre ON datossalud.idtiposangre = tiposangre.id WHERE usuarios.id = $idusuario;";
    $datos = mysqli_query( $conexion, $sql );

    $tiposangre = array();
    if ( $datos && mysqli_num_rows( $datos ) >= 1 ) {
        $tiposangre = mysqli_fetch_assoc( $datos );
    }
    /*---------------------datospersonales-------------------------*/
    $sql = "SELECT * FROM datospersonales WHERE id = $iddatospersonales ;";
    $datos = mysqli_query( $conexion, $sql );

    $datosPersonales = array();
    if ( $datos && mysqli_num_rows( $datos ) >= 1 ) {
        $datosPersonales = mysqli_fetch_assoc( $datos );
    }

    $resultado = $usuarios + $datosUbicacion + $datosFamiliares + $datosFinancieros + $datosReligion + $enterado + $datosAcademicos + $datosSalud + $datosPersonales + $tiposangre + $datosUbicacionPatrocinador;
    /*
    var_dump( $resultado );
    die();
    */
    return $resultado;
}

function sendLoginData($correo, $password, $nombre, $apellido ){
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $from = "noreply.localhots@gmail.com";
    $to = $correo;
    $subject = "Registro Exitoso";
    $message = "Hola $nombre $apellido, somo del departamanto de servicios escolares del Instituto Universitario del Sureste\n".
        "Tus datos han sido guardados exitosamente\n".
        "Tus datos de inicio de sesion son:\n".
        "Usuario: $correo \n".
        "Contraseña: $password";
    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
}

?>