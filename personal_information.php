
<?php 
require_once 'includes/conexion.php';
require_once 'includes/helpers.php'; 
?>
<!doctype html>
<html lang="en">

<head>
  <!--   meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="css/custom.css">

  <title>Hello, world!</title>
</head>

<body>
  <main>
    <section>
      <div class="container mt-5">
        <div class="text-center my-5">
          <h1>Solicitud de Ingreso</h1>
        </div>
        <form action="inscripcion/receive_information.php" method="POST">
          <header class="form-group">
            <h2>Datos Personales</h2>
          </header>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputNombre">Nombre</label>
              <input type="text" class="form-control" name="inputNombre"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nombre') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputApellidoPaterno">Apellido Paterno</label>
              <input type="text" class="form-control" name="inputApellidoPaterno"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidoPaterno') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputApellidoMaterno">Apellido Materno</label>
              <input type="text" class="form-control" name="inputApellidoMaterno"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidoMaterno') : ''; ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md">
              <label for="inputCalleYNumero">Calle y Num.</label>
              <input type="text" class="form-control" name="inputCalleYNumero"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'calleNum') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputColonia">Colonia</label>
              <input type="text" class="form-control" name="inputColonia"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'colonia') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputCiudad">Ciudad</label>
              <input type="text" class="form-control" name="inputCiudad"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'ciudad') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputEstado">Estado</label>
              <input type="text" class="form-control" name="inputEstado"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'estado') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputCP">C.P</label>
              <input type="text" class="form-control" name="inputCP"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'codigoPostal') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputPais">Pais</label>
              <input type="text" class="form-control" name="inputPais"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'pais') : ''; ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md">
              <label for="inputTelFijo">Tel. Fijo</label>
              <input type="tel" class="form-control" name="inputTelFijo"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'telefono') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputCelular">Celular</label>
              <input type="tel" class="form-control" name="inputCelular"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'celular') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" name="inputEmail"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'correo') : ''; ?>
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'correo-existente') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputSexo">Sexo</label>
              <select name="inputSexo" class="form-control"  >
              <option value="Masculino" selected>Masculino</option>
                <option value="Femenino">Femeninno</option>
                <option value="Otro">Otro</option>
              </select>
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'sexo') : ''; ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md">
              <label for="inputReligion">Religión</label>
              <input type="text" class="form-control" name="inputReligion"  >
            </div>
            <div class="form-group col-md">
              <label for="inputBautizo">Bautizado</label>
              <select name="inputBautizo" class="form-control">
                <option value="Si">Si</option>
                <option value="No" selected>No</option>
              </select>
            </div>
            <div class="form-group col-md">
              <label for="inputDistrito">Distrito</label>
              <input type="text" class="form-control" name="inputDistrito"  >
            </div>
            <div class="form-group col-md">
              <label for="inputAsociacion">Asociación o Misión</label>
              <input type="text" class="form-control" name="inputAsociacion"  >
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md">
              <label for="inputLugarNac">Lugar de Nac.</label>
              <input type="text" class="form-control" name="inputLugarNac"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'lugarNacimiento') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputNacionalidad">Nacionalidad</label>
              <input type="text" class="form-control" name="inputNacionalidad"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nacionalidad') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputFechaNac">Fecha de Nacimiento</label>
              <input type="date" class="form-control" name="inputFechaNac"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'fechaNacimiento') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputEdad">Edad</label>
              <input type="number" class="form-control" name="inputEdad"  >
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'edad') : ''; ?>
            </div>
          </div>

          <div class="form-row align-items-center">
            <div class="form-group col-md">
              <label class="form-check-label" for="edoCivil">Estado Civil: </label>
            </div>
            <div class="form-group col-4 col-md pl-4 pl-md-0">
              <input class="form-check-input" type="radio" name="inputEdoCivil" id="edoCivil1" value="Soltero" checked>
              <label class="form-check-label" for="edoCivil1">Soltero/a</label>
            </div>
            <div class="form-group col-4 col-md">
              <input class="form-check-input" type="radio" name="inputEdoCivil" id="edoCivil2" value="Casado">
              <label class="form-check-label" for="edoCivil2">Casado/a</label>
            </div>
            <div class="form-group col-4 col-md">
              <input class="form-check-input" type="radio" name="inputEdoCivil" id="edoCivil3" value="Divorciado">
              <label class="form-check-label" for="edoCivil3">Divorciado/a</label>
            </div>
            <div class="form-group col-4 col-md pl-4 pl-sm-0">
              <input class="form-check-input" type="radio" name="inputEdoCivil" id="edoCivil4" value="Separado">
              <label class="form-check-label" for="edoCivil4">Separado/a</label>
            </div>
            <div class="form-group col-4 col-md">
              <input class="form-check-input" type="radio" name="inputEdoCivil" id="edoCivil5" value="Viudo">
              <label class="form-check-label" for="edoCivil5">Viudo/a</label>
            </div>
            <div class="form-group col-4 col-md">
              <input class="form-check-input" type="radio" name="inputEdoCivil" id="edoCivil6" value="Concubinato">
              <label class="form-check-label" for="edoCivil6">Concubinato</label>
            </div>
          </div>

          <div class="form-group">
            <h6>¿Cómo te enteraste del Instituto Universitario del Sureste?</h6>
          </div>
          <div class="form-row align-items-center">
            <div class="form-group col-md">
              <label class="form-check-label" for="conceiunis">A través de:</label>
            </div>
            <div class="form-group col-4 col-md pl-4 pl-md-0">
              <input type="radio" class="form-check-input" name="enterado" id="checkMestro" value="1" checked>
              <label class="form-check-label" for="checkMestro">Maestro</label>
            </div>
            <div class="form-group col-4 col-md">
              <input type="radio" class="form-check-input" name="enterado" id="checkAmigo" value="2">
              <label class="form-check-label" for="checkAmigo">Amigo</label>
            </div>
            <div class="form-group col-4 col-md">
              <input type="radio" class="form-check-input" name="enterado" id="checkPromotor" value="3">
              <label class="form-check-label" for="checkPromotor">Promotor</label>
            </div>
            <div class="form-group col-4 col-md pl-4 pl-sm-0">
              <input type="radio" class="form-check-input" name="enterado" id="checkPeriodico" value="4">
              <label class="form-check-label" for="checkPeriodico">Periodico</label>
            </div>
            <div class="form-group col-4 col-md">
              <input type="radio" class="form-check-input" name="enterado" id="checkFacebook" value="5">
              <label class="form-check-label" for="checkFacebook">Facebook</label>
            </div>
            <div class="form-group col-4 col-md">
              <input type="radio" class="form-check-input" name="enterado" id="checkWeb" value="6">
              <label class="form-check-label" for="checkWeb">Sitio Web</label>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md">
              <label for="inputOptionTrabajo">¿Trabajará mientras estudia?</label>
              <select name="inputOptionTrabajo" class="form-control">
                <option value="No" selected>No</option>
                <option value="Si">Si</option>
              </select>
            </div>
            <div class="form-group col-md">
              <label for="inputTrabajo">¿Donde?</label>
              <input type="text" class="form-control" name="inputTrabajo">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'trabajo') : ''; ?>
            </div>
          </div>
          <div class="form-row align-items-center">
            <div class="form-group col-md-4">
              <label for="preguntaBeca">Actualmente ¿Recibe alguna beca?</label>
            </div>
            <div class="form-group col-6 col-md pl-4 pl-sm-0">
              <input type="radio" class="form-check-input" name="checkBeca" value="Si" id="checkBecaSi">
              <label class="form-check-label" for="checkBecaSi">Si</label>
            </div>
            <div class="form-group col-6 col-md pl-sm-0">
              <input type="radio" class="form-check-input" name="checkBeca" value="No" id="checkBecaNo" checked>
              <label class="form-check-label" for="checkBecaNo">No</label>
            </div>
            <div class="form-group col-md">
              <label for="inputBeca" class="sr-only">¿Cual?</label>
              <input type="text" class="form-control" name="inputBeca" placeholder="¿Cual?">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'beca') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputPorcentajeBeca" class="sr-only">Porcentaje</label>
              <input type="text" class="form-control" name="inputPorcentajeBeca" placeholder="Porcentaje">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'becaPorcentaje') : ''; ?>
            </div>
          </div>


          <!-- health information -->
          <section class="bg-dividier p-3">
          <header class="form-group">
            <h2>Información de Salud</h2>
          </header>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputSangre">Tipo de Sangre</label>
              <select name="inputSangre" class="form-control" required>
                <option value="1" selected>No se</option>
                <option value="2">O-</option>
                <option value="3">O+</option>
                <option value="4">A-</option>
                <option value="5">A+</option>
                <option value="6">B-</option>
                <option value="7">B+</option>
                <option value="8">AB-</option>
                <option value="9">AB+</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputPadecimiento">¿Padeces algún tipo de impedimento físico?</label>
              <input type="text" class="form-control" name="inputPadecimiento" placeholder="¿Cual?">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'padecimiento') : ''; ?>
            </div>
            <div class="form-group col-md-5">
              <label for="inputEnfermedad">¿Padeces algún tipo de enfermedad o alergia?</label>
              <input type="text" class="form-control" name="inputEnfermedad" placeholder="¿Cual?">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'enfermedad') : ''; ?>
            </div>
            <div class="form-group col-md-5">
              <label for="inputAlergia">¿Eres alérgico a algún medicamento?</label>
              <input type="text" class="form-control" name="inputAlergia" placeholder="¿Cual?">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'alergia') : ''; ?>
            </div>
          </div>
          <div class="form-group">
            <h6>¿Cuentas con algún seguro? (Es indispensable que cuentes con algún seguro en caso de enfermedad)</h6>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputImss">No. De Seguro:</label>
              <input type="text" class="form-control" name="inputSeguro">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'seguro') : ''; ?>
            </div>
          </div>
          </section>
          
          
          <!-- INFORMACIÓN ACADÉMICA -->
          <header class="form-group">
            <h2>Información Académica</h2>
          </header>
          <div class="form-row align-items-center">
            <div class="form-group col-12">
              <label class="form-check-label" for="conceiunis">Desea incribirse en:</label>
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'carrera') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <input type="radio" class="form-check-input" name="inputCarrera" id="licNut" value="1">
              <label class="form-check-label" for="licNut">Lic. en Nutrición</label>
            </div>
            <div class="form-group col-md-4">
              <input type="radio" class="form-check-input" name="inputCarrera" id="licEnf" value="2">
              <label class="form-check-label" for="licEnf">Lic. en Enfermería </label>
            </div>
            <div class="form-group col-md-4 ">
              <input type="radio" class="form-check-input" name="inputCarrera" id="licCont" value="3">
              <label class="form-check-label" for="licCont">Lic. en Contaduría Pública</label>
            </div>
            <div class="form-group col-md-4">
              <input type="radio" class="form-check-input" name="inputCarrera" id="licEdu" value="4">
              <label class="form-check-label" for="licEdu">Lic. en Ciencias de la Educación </label>
            </div>
            <div class="form-group col-md-4">
              <input type="radio" class="form-check-input" name="inputCarrera" id="licPsic" value="5">
              <label class="form-check-label" for="licPsic">Lic. en Psicología Clínica </label>
            </div>
          </div>

          <!-- INFORMACIÓN Familiar -->
          <section class="bg-dividier p-3">
          <header class="form-group">
            <h2>Información Familiar</h2>
          </header>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputNombrePapa">Nombre del Padre</label>
              <input type="text" class="form-control" name="inputNombrePapa">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nombrePapa') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputApellidoPaternoPapa">Apellido Paterno</label>
              <input type="text" class="form-control" name="inputApellidoPaternoPapa">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidoPaternoPapa') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputApellidoMaternoPapa">Apellido Materno</label>
              <input type="text" class="form-control" name="inputApellidoMaternoPapa">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidoMaternoPapa') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputDireccionPapa">Dirección Permanente </label>
              <input type="text" class="form-control" name="inputDireccionPapa">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'direccionPapa') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputCelPapa">Celular</label>
              <input type="text" class="form-control" name="inputCelPapa">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'celularPapa') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputOcupacionPapa">Ocupación</label>
              <input type="text" class="form-control" name="inputOcupacionPapa">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'ocupacionPapa') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputNombreMama">Nombre de la Madre</label>
              <input type="text" class="form-control" name="inputNombreMama">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nombreMama') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputApellidoPaternoMama">Apellido Paterno</label>
              <input type="text" class="form-control" name="inputApellidoPaternoMama">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidoMamaPaterno') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputApellidoMaternoMama">Apellido Materno</label>
              <input type="text" class="form-control" name="inputApellidoMaternoMama">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidoMamaMaterno') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputDireccionMama">Dirección Permanente </label>
              <input type="text" class="form-control" name="inputDireccionMama">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'direccionMama') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputCelMama">Celular</label>
              <input type="text" class="form-control" name="inputCelMama">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'celularMama') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputOcupacionMama">Ocupación</label>
              <input type="text" class="form-control" name="inputOcupacionMama">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'ocupacionMama') : ''; ?>
            </div>
          </div>
          <div class="form-row align-items-center">
            <div class="form-group col-md">
              <label class="form-check-label" for="edoCivil">Estado Civil de los Padres: </label>
            </div>
            <div class="form-group col-4 col-md pl-4 pl-md-0">
              <input class="form-check-input" type="radio" name="edoCivilPadres" id="edoCivil8" value="Casados" checked>
              <label class="form-check-label" for="edoCivil8">Casados</label>
            </div>
            <div class="form-group col-4 col-md">
              <input class="form-check-input" type="radio" name="edoCivilPadres" id="edoCivil9" value="Divorciados">
              <label class="form-check-label" for="edoCivil9">Divorciados</label>
            </div>
            <div class="form-group col-4 col-md">
              <input class="form-check-input" type="radio" name="edoCivilPadres" id="edoCivil10" value="Separados">
              <label class="form-check-label" for="edoCivil10">Separados</label>
            </div>
            <div class="form-group col-4 col-md pl-4 pl-md-0">
              <input class="form-check-input" type="radio" name="edoCivilPadres" id="edoCivil11" value="Viudo">
              <label class="form-check-label" for="edoCivil11">Viudo/a</label>
            </div>
            <div class="form-group col-4 col-md">
              <input class="form-check-input" type="radio" name="edoCivilPadres" id="edoCivil12" value="Concubinato">
              <label class="form-check-label" for="edoCivil12">Concubinato</label>
            </div>
          </div>
          </section>
          

          

          <!-- INFORMACIÓN FINANCIERA -->
          <header class="form-group">
            <h2>Información Financiera</h2>
            <h6>Proporciona los datos de la persona que cubrirá la inversión de tus estudios.</h6>
          </header>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputNombrePatrocinador">Nombre</label>
              <input type="text" class="form-control" name="inputNombrePatrocinador">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nombrePatrocinador') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputApellidoPaternoPatrocinador">Apellido Paterno</label>
              <input type="text" class="form-control" name="inputApellidoPaternoPatrocinador">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidoPaternoPatrocinador') : ''; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="inputApellidoMaternoPatrocinador">Apellido Materno</label>
              <input type="text" class="form-control" name="inputApellidoMaternoPatrocinador">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidoMaternoPatrocinador') : ''; ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md">
              <label for="inputCalleYNumeroPatrocinador">Calle y Num.</label>
              <input type="text" class="form-control" name="inputCalleYNumeroPatrocinador">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'calleNumPatrocinador') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputColoniaPatrocinador">Colonia</label>
              <input type="text" class="form-control" name="inputColoniaPatrocinador">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'coloniaPatrocinador') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputCiudadPatrocinador">Ciudad</label>
              <input type="text" class="form-control" name="inputCiudadPatrocinador">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'ciudadPatrocinador') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputEstadoPatrocinador">Estado</label>
              <input type="text" class="form-control" name="inputEstadoPatrocinador">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'estadoPatrocinador') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputCPPatrocinador">C.P</label>
              <input type="text" class="form-control" name="inputCPPatrocinador">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'codigoPostalPatrocinador') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputPaisPatrocinador">Pais</label>
              <input type="text" class="form-control" name="inputPaisPatrocinador">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'paisPatrocinador') : ''; ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md">
              <label for="inputEmailPatrocinador">Email</label>
              <input type="email" class="form-control" name="inputEmailPatrocinador">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'correoPatrocinador') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputTelPatrocinador">Teléfono</label>
              <input type="text" class="form-control" name="inputTelPatrocinador">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'telefonoPatrocinador') : ''; ?>
            </div>
            <div class="form-group col-md">
              <label for="inputTrabajoPatrocinador">Ocupación</label>
              <input type="text" class="form-control" name="inputTrabajoPatrocinador">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'trabajoPatrocinador') : ''; ?>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Siguiente</button>

        </form>
      </div>
    </section>
  </main>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

<?php borrarErrores() ?>