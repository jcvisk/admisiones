<?php
if ( isset( $_POST ) ) {

    require_once '../includes/conexion.php';
    require_once '../includes/helpers.php';
    /*DATOS PERSONALES*/
    $enterado = isset( $_POST['enterado'] ) ? ( INT )mysqli_real_escape_string( $conexion, $_POST['enterado'] ) : '' ;
    $lugarNacimiento = isset( $_POST['inputLugarNac'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputLugarNac'] ) : '' ;
    $nacionalidad = isset( $_POST['inputNacionalidad'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputNacionalidad'] ) : '' ;
    $fechaNacimiento = isset( $_POST['inputFechaNac'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputFechaNac'] ) : '' ;
    $edad = isset( $_POST['inputEdad'] ) ? ( INT )mysqli_real_escape_string( $conexion, $_POST['inputEdad'] ) : '' ;
    $sexo = isset( $_POST['inputSexo'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputSexo'] ) : '' ;
    $estadoCivil = isset( $_POST['inputEdoCivil'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputEdoCivil'] ) : '' ;
    $trabajo = isset( $_POST['inputTrabajo'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputTrabajo'] ) : '' ;
    $beca = isset( $_POST['inputBeca'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputBeca'] ) : '' ;
    $becaPorcentaje = isset( $_POST['inputPorcentajeBeca'] ) ? ( INT )mysqli_real_escape_string( $conexion, $_POST['inputPorcentajeBeca'] ) : '' ;
    $pais = isset( $_POST['inputPais'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputPais'] ) : '' ;
    $calleNum = isset( $_POST['inputCalleYNumero'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputCalleYNumero'] ) : '';
    $colonia = isset( $_POST['inputColonia'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputColonia'] ) : '' ;
    $ciudad = isset( $_POST['inputCiudad'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputCiudad'] ) : '' ;
    $estado = isset( $_POST['inputEstado'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputEstado'] ) : '' ;
    $codigoPostal = isset( $_POST['inputCP'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputCP'] ) : '' ;
    $telefono = isset( $_POST['inputTelFijo'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputTelFijo'] ) : '' ;
    $celular = isset( $_POST['inputCelular'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputCelular'] ) : '' ;
    $religion = isset( $_POST['inputReligion'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputReligion'] ) : '' ;
    $bautizado = isset( $_POST['inputBautizo'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputBautizo'] ) : '' ;
    $distrito = isset( $_POST['inputDistrito'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputDistrito'] ) : '' ;
    $asociacionMision = isset( $_POST['inputAsociacion'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputAsociacion'] ) : '' ;
    $nombre = isset( $_POST['inputNombre'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputNombre'] ) : '' ;
    $apellidoPaterno = isset( $_POST['inputApellidoPaterno'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputApellidoPaterno'] ) : '' ;
    $apellidoMaterno = isset( $_POST['inputApellidoMaterno'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputApellidoMaterno'] ) : '' ;
    $correo = isset( $_POST['inputEmail'] ) ? trim( mysqli_real_escape_string( $conexion, $_POST['inputEmail'] ) ) : '' ;
    $checkTrabajo = isset( $_POST['inputOptionTrabajo'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputOptionTrabajo'] ) : '' ;
    $checkBeca = isset( $_POST['checkBeca'] ) ? mysqli_real_escape_string( $conexion, $_POST['checkBeca'] ) : '' ;

    /*INFORMACION DE SALUD*/
    $sangre = isset( $_POST['inputSangre'] ) ? ( INT )mysqli_real_escape_string( $conexion, $_POST['inputSangre'] ) : '' ;
    $padecimiento = isset( $_POST['inputPadecimiento'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputPadecimiento'] ) : '' ;
    $enfermedad = isset( $_POST['inputEnfermedad'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputEnfermedad'] ) : '' ;
    $alergia = isset( $_POST['inputAlergia'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputAlergia'] ) : '' ;
    $seguro = isset( $_POST['inputSeguro'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputSeguro'] ) : '' ;

    /*INFOMACION ACADEMICA*/
    $carrera = isset( $_POST['inputCarrera'] ) ? ( INT )mysqli_real_escape_string( $conexion, $_POST['inputCarrera'] ) : '' ;

    /*INFOMACION FAMILIAR*/
    $nombrePapa = isset( $_POST['inputNombrePapa'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputNombrePapa'] ) : '' ;
    $apellidoPapaPaterno = isset( $_POST['inputApellidoPaternoPapa'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputApellidoPaternoPapa'] ) : '' ;
    $apellidoPapaMaterno = isset( $_POST['inputApellidoMaternoPapa'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputApellidoMaternoPapa'] ) : '' ;
    $direccionPapa = isset( $_POST['inputDireccionPapa'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputDireccionPapa'] ) : '' ;
    $celularPapa = isset( $_POST['inputCelPapa'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputCelPapa'] ) : '' ;
    $ocupacionPapa = isset( $_POST['inputOcupacionPapa'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputOcupacionPapa'] ) : '' ;
    $nombreMama = isset( $_POST['inputNombreMama'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputNombreMama'] ) : '' ;
    $apellidoMamaPaterno = isset( $_POST['inputApellidoPaternoMama'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputApellidoPaternoMama'] ) : '' ;
    $apellidoMamaMaterno = isset( $_POST['inputApellidoMaternoMama'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputApellidoMaternoMama'] ) : '' ;
    $direccionMama = isset( $_POST['inputDireccionMama'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputDireccionMama'] ) : '' ;
    $celularMama = isset( $_POST['inputCelMama'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputCelMama'] ) : '' ;
    $ocupacionMama = isset( $_POST['inputOcupacionMama'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputOcupacionMama'] ) : '' ;
    $estadoCivilPadres = isset( $_POST['edoCivilPadres'] ) ? mysqli_real_escape_string( $conexion, $_POST['edoCivilPadres'] ) : '' ;

    /*INFORMACION DEL PATROCINADOR*/
    $nombrePatrocinador = isset( $_POST['inputNombrePatrocinador'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputNombrePatrocinador'] ) : false ;
    $apellidoPaternoPatrocinador = isset( $_POST['inputApellidoPaternoPatrocinador'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputApellidoPaternoPatrocinador'] ) : false ;
    $apellidoMaternoPatrocinador = isset( $_POST['inputApellidoMaternoPatrocinador'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputApellidoMaternoPatrocinador'] ) : false ;
    $calleNumPatrocinador = isset( $_POST['inputCalleYNumeroPatrocinador'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputCalleYNumeroPatrocinador'] ) : false ;
    $coloniaPatrocinador = isset( $_POST['inputColoniaPatrocinador'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputColoniaPatrocinador'] ) : false ;
    $ciudadPatrocinador = isset( $_POST['inputCiudadPatrocinador'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputCiudadPatrocinador'] ) : false ;
    $estadoPatrocinador = isset( $_POST['inputEstadoPatrocinador'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputEstadoPatrocinador'] ) : false ;
    $codigoPostalPatrocinador = isset( $_POST['inputCPPatrocinador'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputCPPatrocinador'] ) : false ;
    $paisPatrocinador = isset( $_POST['inputPaisPatrocinador'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputPaisPatrocinador'] ) : false ;
    $correoPatrocinador = isset( $_POST['inputEmailPatrocinador'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputEmailPatrocinador'] ) : false ;
    $telefonoPatrocinador = isset( $_POST['inputTelPatrocinador'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputTelPatrocinador'] ) : false ;
    $trabajoPatrocinador = isset( $_POST['inputTrabajoPatrocinador'] ) ? mysqli_real_escape_string( $conexion, $_POST['inputTrabajoPatrocinador'] ) : false ;

    $errores = array();
    $datos_registro = array();

    /*INFORMACION PERSONAL------------------------------------------------------------------------------*/
    /*Validando nombre*/
    if ( empty( $nombre ) || is_numeric( $nombre ) || preg_match( '/[0-9]/', $nombre ) ) {
        $errores['nombre'] = 'El nombre no es válido';
    }

    /*Validando apellidos*/
    if ( empty( $apellidoPaterno ) || is_numeric( $apellidoPaterno ) || preg_match( '/[0-9]/', $apellidoPaterno ) ) {
        $errores['apellidoPaterno'] = 'El apellido no es válido';
    }

    if ( empty( $apellidoMaterno ) || is_numeric( $apellidoMaterno ) || preg_match( '/[0-9]/', $apellidoMaterno ) ) {
        $errores['apellidoMaterno'] = 'El apellido no es válido';
    }

    /*Validando calle y numero*/
    if ( empty( $calleNum ) ) {
        $errores['calleNum'] = 'El campo no puede estar vacío';
    }

    /*Validadno colonia*/
    if ( empty( $colonia ) ) {
        $errores['colonia'] = 'El campo no puede estar vacío';
    }

    /*Validando ciudad*/
    if ( empty( $ciudad ) ) {
        $errores['ciudad'] = 'El campo no puede estar vacío';
    }

    /*Validadno estado*/
    if ( empty( $estado ) ) {
        $errores['estado'] = 'El campo no puede estar vacío';
    }

    /*Validando codigo postal*/
    if ( empty( $codigoPostal ) ) {
        $errores['codigoPostal'] = 'El campo no puede estar vacío';
    }

    /*Validando pais*/
    if ( empty( $pais ) ) {
        $errores['pais'] = 'El campo no puede estar vacío';
    }

    /*Validando telefono*/
    if ( empty( $telefono ) ) {
        $errores['telefono'] = 'El campo no puede estar vacío';
    }

    /*Validando celular*/
    if ( empty( $celular ) ) {
        $errores['celular'] = 'El campo no puede estar vacío';
    }

    /*validando correo*/
    if ( !empty( $correo ) && filter_var( $correo, FILTER_VALIDATE_EMAIL ) ) {
        //Validando que el correo no exista en la db
        $sql = "SELECT * FROM usuarios where correo = '$correo'";
        $correo_verify = mysqli_query( $conexion, $sql );
        if ( $correo_verify && mysqli_num_rows( $correo_verify ) == 1 ) {
            $errores['correo-existente'] = 'El correo ya esta en uso';
        }
    } else {
        $errores['correo'] = 'El correo no es válido';
    }

    /*Validadno sexo*/
    if ( empty( $sexo ) ) {
        $errores['sexo'] = 'El campo no puede estar vacío';
    }

    /*Validadno sexo*/
    if ( empty( $sexo ) ) {
        $errores['seestadoCivilxo'] = 'El campo no puede estar vacío';
    }

    /*Validando lugar de Nacimiento*/
    if ( empty( $lugarNacimiento ) ) {
        $errores['lugarNacimiento'] = 'El campo no puede estar vacío';
    }

    /*Validando nacionalidad*/
    if ( empty( $nacionalidad ) ) {
        $errores['nacionalidad'] = 'El campo no puede estar vacío';
    }

    /*Validando fecha de nacimiento*/
    if ( empty( $fechaNacimiento ) ) {
        $errores['fechaNacimiento'] = 'El campo no puede estar vacío';
    }

    /*Validando edad*/
    if ( empty( $edad ) || $edad <= 0 ) {
        $errores['edad'] = 'El campo no puede estar vacío';
    }

    /*Validadno trabajo*/
    if ( $checkTrabajo == 'Si' ) {
        if ( empty( $trabajo ) ) {
            $errores['trabajo'] = 'El campo no puede estar vacío';
        }
    }

    /*Validando beca*/
    if ( $checkBeca == 'Si' ) {
        if ( empty( $beca ) ) {
            $errores['beca'] = 'El campo no puede estar vacío';
        }

        /*Validando porcentaje de beca ( MEJORAR LA VALIDACION )*/
        if ( empty( $becaPorcentaje ) ) {
            $errores['becaPorcentaje'] = 'El campo no puede estar vacío';
        }
    }
    //Guardando contraseña generada
    $password = generatePassword();

    /*INFORMACION DE SALUD------------------------------------------------------------------------------*/
    if ( empty( $padecimiento ) ) {
        $errores['padecimiento'] = 'El campo no puede estar vacío';
    }

    /*Validando enfermedad*/
    if ( empty( $enfermedad ) ) {
        $errores['enfermedad'] = 'El campo no puede estar vacío';
    }

    /*Validadno alergia*/
    if ( empty( $alergia ) ) {
        $errores['alergia'] = 'El campo no puede estar vacío';
    }

    /*Validando seguro MEJORAR LA VALIDACION*/
    if ( empty( $seguro ) ) {
        $errores['seguro'] = 'El campo no puede estar vacío';
    }

    /*INFORMACION ACADEMICA------------------------------------------------------------------------------*/
    if ( empty( $carrera ) ) {
        $errores['carrera'] = 'Debe seleccionar una licenciatura';
    }
    /*INFORMACION FAMILIAR------------------------------------------------------------------------------*/
    /*Validando datos del Padre*/
    if ( empty( $nombrePapa ) || is_numeric( $nombrePapa ) || preg_match( '/[0-9]/', $nombrePapa ) ) {
        $errores['nombrePapa'] = 'El nombre no es válido';
    }
    /**/
    if ( empty( $apellidoPapaPaterno ) || is_numeric( $apellidoPapaPaterno ) || preg_match( '/[0-9]/', $apellidoPapaPaterno ) ) {
        $errores['apellidoPaternoPapa'] = 'El apellido no es válido';
    }
    /**/
    if ( empty( $apellidoPapaMaterno ) || is_numeric( $apellidoPapaMaterno ) || preg_match( '/[0-9]/', $apellidoPapaMaterno ) ) {
        $errores['apellidoMaternoPapa'] = 'El apellido no es válido';
    }
    if ( empty( $direccionPapa ) ) {
        $errores['direccionPapa'] = 'El campo no puede estar vacío';
    }
    /**/
    if ( empty( $celularPapa ) ) {
        $errores['celularPapa'] = 'El campo no puede estar vacío';
    }
    /**/
    if ( empty( $ocupacionPapa ) ) {
        $errores['ocupacionPapa'] = 'El campo no puede estar vacío';
    }

    /*Validando datos de la Madre*/
    if ( empty( $nombreMama ) || is_numeric( $nombreMama ) || preg_match( '/[0-9]/', $nombreMama ) ) {
        $errores['nombreMama'] = 'El nombre no es válido';
    }
    /**/
    if ( empty( $apellidoMamaPaterno ) || is_numeric( $apellidoMamaPaterno ) || preg_match( '/[0-9]/', $apellidoMamaPaterno ) ) {
        $errores['apellidoMamaPaterno'] = 'El apellido no es válido';
    }
    /**/
    if ( empty( $apellidoMamaMaterno ) || is_numeric( $apellidoMamaMaterno ) || preg_match( '/[0-9]/', $apellidoMamaMaterno ) ) {
        $errores['apellidoMamaMaterno'] = 'El apellido no es válido';
    }
    /**/
    if ( empty( $direccionMama ) ) {
        $errores['direccionMama'] = 'El campo no puede estar vacío';
    }
    /**/
    if ( empty( $celularMama ) ) {
        $errores['celularMama'] = 'El campo no puede estar vacío';
    }
    /**/
    if ( empty( $ocupacionMama ) ) {
        $errores['ocupacionMama'] = 'El campo no puede estar vacío';
    }
    /*Estado civil*/
    if ( empty( $estadoCivilPadres ) ) {
        $errores['estadoCivilPadres'] = 'El campo no puede estar vacío';
    }

    /*INFORMACION PATROCINAOR------------------------------------------------------------------------------*/
    /*Validando nombre*/
    if ( empty( $nombrePatrocinador ) || is_numeric( $nombrePatrocinador ) || preg_match( '/[0-9]/', $nombrePatrocinador ) ) {
        $errores['nombrePatrocinador'] = 'El nombre no es válido';
    }

    /*Validando apellidos*/
    if ( empty( $apellidoPaternoPatrocinador ) || is_numeric( $apellidoPaternoPatrocinador ) || preg_match( '/[0-9]/', $apellidoPaternoPatrocinador ) ) {
        $errores['apellidoPaternoPatrocinador'] = 'El apellido no es válido';
    }

    if ( empty( $apellidoMaterno ) || is_numeric( $apellidoMaterno ) || preg_match( '/[0-9]/', $apellidoMaterno ) ) {
        $errores['apellidoMaternoPatrocinador'] = 'El apellido no es válido';
    }

    /*Validando calle y numero*/
    if ( empty( $calleNumPatrocinador ) ) {
        $errores['calleNumPatrocinador'] = 'El campo no puede estar vacío';
    }

    /*Validadno colonia*/
    if ( empty( $coloniaPatrocinador ) ) {
        $errores['coloniaPatrocinador'] = 'El campo no puede estar vacío';
    }

    /*Validando ciudad*/
    if ( empty( $ciudadPatrocinador ) ) {
        $errores['ciudadPatrocinador'] = 'El campo no puede estar vacío';
    }

    /*Validadno estado*/
    if ( empty( $estadoPatrocinador ) ) {
        $errores['estadoPatrocinador'] = 'El campo no puede estar vacío';
    }

    /*Validando codigo postal*/
    if ( empty( $codigoPostalPatrocinador ) ) {
        $errores['codigoPostalPatrocinador'] = 'El campo no puede estar vacío';
    }

    /*validate pais*/
    if ( empty( $paisPatrocinador ) ) {
        $errores['paisPatrocinador'] = 'El campo no puede estar vacío';
    }

    /*validadno correo*/
    if ( empty( $correoPatrocinador ) || !filter_var( $correoPatrocinador, FILTER_VALIDATE_EMAIL ) ) {
        $errores['correoPatrocinador'] = 'El correo no es válido';
    }

    /*Validando telefono*/
    if ( empty( $telefonoPatrocinador ) ) {
        $errores['telefonoPatrocinador'] = 'El campo no puede estar vacío';
    }

    /*Validando trabajo*/
    if ( empty( $trabajoPatrocinador ) ) {
        $errores['trabajoPatrocinador'] = 'El campo no puede estar vacío';
    }

    if ( count( $errores ) == 0 ) {

        $errores_sabe_db = array();
        //Insertar datos en la DB

        /*Tabla datosubicacion de patrocinador*/
        $sqlDatosubicacionP = "INSERT INTO datosubicacion VALUES(NULL, '$paisPatrocinador', '$calleNumPatrocinador', '$coloniaPatrocinador', '$ciudadPatrocinador', '$estadoPatrocinador', '$codigoPostalPatrocinador', '$telefonoPatrocinador', NULL ); ";
        $saveDatosubicacionP = mysqli_query( $conexion, $sqlDatosubicacionP );
        if ( !$saveDatosubicacionP ) {
            $errores_sabe_db['datosubicacion'] = 'Error al guardar datosubicacion';
        }

        /*Guardar datosfinancieros*/
        $iddatosUbicacionPatrocinador = getid( $conexion, 'datosubicacion' );
        $sqlDatosfinancieros = "INSERT INTO datosfinancieros VALUES(NULL, '$nombrePatrocinador', '$apellidoPaternoPatrocinador', '$apellidoMaternoPatrocinador', '$trabajoPatrocinador', '$correoPatrocinador', $iddatosUbicacionPatrocinador); ";
        $saveDatosfinancieros = mysqli_query( $conexion, $sqlDatosfinancieros );
        if ( !$saveDatosfinancieros ) {
            $errores_sabe_db['datosfinancieros'] = 'Error al guardar datosfinancieros';
        }

        /*Guardar datossalud*/
        $sqlDatossalud = "INSERT INTO datossalud VALUES(NULL, '$padecimiento', '$enfermedad', '$alergia', '$seguro', $sangre); ";
        $saveDatossalud = mysqli_query( $conexion, $sqlDatossalud );
        if ( !$saveDatossalud ) {
            $errores_sabe_db['datossalud'] = 'Error al guardar datossalud';
        }

        /*Guardar datospersonales*/
        $sqlDatospersonales = "INSERT INTO datospersonales VALUES(NULL, '$lugarNacimiento', '$nacionalidad', '$fechaNacimiento', $edad, '$sexo', '$estadoCivil', '$trabajo', '$beca', $becaPorcentaje); ";
        $saveDatospersonales = mysqli_query( $conexion, $sqlDatospersonales );
        if ( !$saveDatospersonales ) {
            $errores_sabe_db['datospersonales'] = 'Error al guardar datospersonales';
        }

        /*Guardar datosfamiliares*/
        $sqlDatosfamiliares = "INSERT INTO datosfamiliares VALUES(NULL, '$nombrePapa', '$apellidoPapaPaterno', '$apellidoPapaMaterno', '$direccionPapa', '$celularPapa','$ocupacionPapa','$nombreMama', '$apellidoMamaPaterno', '$apellidoMamaMaterno', '$direccionMama', '$celularMama ', '$ocupacionMama', '$estadoCivilPadres'); ";
        $saveDatosfamiliares = mysqli_query( $conexion, $sqlDatosfamiliares );
        if ( !$saveDatosfamiliares ) {
            $errores_sabe_db['datosfamiliares'] = 'Error al guardar datosfamiliares';
        }

        /*Guardar datosreligion*/
        $sqlDatosreligion = "INSERT INTO datosreligion VALUES(NULL, '$religion', '$bautizado', '$distrito', '$asociacionMision'); ";
        $saveDatosreligion = mysqli_query( $conexion, $sqlDatosreligion );
        if ( !$saveDatosreligion ) {
            $errores_sabe_db['datosreligion'] = 'Error al guardar datosreligion';
        }

        /*Guardar datosubicacion*/
        $sqlDatosubicacion = "INSERT INTO datosubicacion VALUES(NULL, '$pais', '$calleNum', '$colonia', '$ciudad', '$estado', '$codigoPostal', '$telefono', '$celular'); ";
        $saveDatosubicacion = mysqli_query( $conexion, $sqlDatosubicacion );
        if ( !$saveDatosubicacion ) {
            $errores_sabe_db['datosubicacion'] = 'Error al guardar datosubicacion';
        }

        /*Guardar usuarios*/
        $iddatosUbicacion = getid( $conexion, 'datosubicacion' );
        $iddatosFamiliares = getid( $conexion, 'datosfamiliares' );
        $iddatosFinancieros = getid( $conexion, 'datosfinancieros' );
        $iddatosReligion = getid( $conexion, 'datosreligion' );
        $iddatosAcademicos = $carrera;
        $identerado = $enterado;
        $iddatosSalud = getid( $conexion, 'datossalud' );
        $iddatosPersonales = getid( $conexion, 'datospersonales' );
        $encrypted_password = password_hash( $password, PASSWORD_BCRYPT, ['cost'=>4] );
        
        $sqlUsuario = "INSERT INTO usuarios VALUES(NULL, '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$correo', '$encrypted_password', $iddatosUbicacion, $iddatosFamiliares, $iddatosFinancieros, $iddatosReligion, $identerado, $iddatosAcademicos, $iddatosSalud , $iddatosPersonales, 1); ";
        $saveUsuario = mysqli_query( $conexion, $sqlUsuario );
        if ( !$saveUsuario ) {
            $errores_sabe_db['usuarios'] = 'Error al guardar usuarios';
        }
        //si no hubo errores al guardar los datos
        if (count($errores_sabe_db) == 0) {
            sendLoginData($correo, $password, $nombre, $apellidoPaterno);
            header( 'Location: end_registration_process.php' );
        }


    } else {
        $_SESSION['errores'] = $errores;
        header( 'Location: ../personal_information.php' );
    }
}

?>