<?php

require_once 'includes/conexion.php';
require_once 'includes/helpers.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');

}

$detalleProspecto =  getProspecto($conexion, $_GET['id']);

?>
<!doctype html>
<html lang='es'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Dashboard | <?= isset($_SESSION['usuario']) ? $_SESSION['usuario']['nombre'] : '' ?> </title>

    <!-- Bootstrap core CSS -->
    <link href='assets/css/bootstrap.css' rel='stylesheet'>
    <!-- Custom styles for this template -->
    <link href='css/dashboard.css' rel='stylesheet'>

</head>

<body>
    <nav class='navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow'>
        <a class='navbar-brand col-md-3 col-lg-2 mr-0 px-3' href='#'>Servisios Escolares</a>
        <button class='navbar-toggler position-absolute d-md-none collapsed' type='button' data-toggle='collapse'
            data-target='#sidebarMenu' aria-controls='sidebarMenu' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <ul class='navbar-nav px-3'>
            <li class='nav-item text-nowrap'>
                <a class='nav-link' href='cerrar_sesion.php'>Sign out</a>
            </li>
        </ul>
    </nav>

    <div class='container-fluid'>
        <div class='row'>
            <nav id='sidebarMenu' class='col-md-3 col-lg-2 d-md-block bg-light sidebar collapse'>
                <div class='sidebar-sticky pt-3'>
                    <ul class='nav flex-column'>
                        <li class='nav-item'>
                            <a class='nav-link active' href='#'>
                                <span data-feather='home'></span>
                                Dashboard <span class='sr-only'>( current )</span>
                            </a>
                        </li>
                        <!-- 
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>
                                <span data-feather='file'></span>
                                Orders
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>
                                <span data-feather='shopping-cart'></span>
                                Products
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>
                                <span data-feather='users'></span>
                                Customers
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>
                                <span data-feather='bar-chart-2'></span>
                                Reports
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>
                                <span data-feather='layers'></span>
                                Integrations
                            </a>
                        </li>
                         -->
                    </ul>
                        <!-- 
                    <h6 class='sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted'>
                        <span>Saved reports</span>
                        <a class='d-flex align-items-center text-muted' href='#' aria-label='Add a new report'>
                            <span data-feather='plus-circle'></span>
                        </a>
                    </h6>
                    <ul class='nav flex-column mb-2'>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>
                                <span data-feather='file-text'></span>
                                Current month
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>
                                <span data-feather='file-text'></span>
                                Last quarter
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>
                                <span data-feather='file-text'></span>
                                Social engagement
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>
                                <span data-feather='file-text'></span>
                                Year-end sale
                            </a>
                        </li>
                    </ul>
                     -->
                </div>
            </nav>

            <main role='main' class='col-md-9 ml-sm-auto col-lg-10 px-md-4'>
        <div
          class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
          <h1 class='h2'>Información general</h1>
          <div class='btn-toolbar mb-2 mb-md-0'>
            <div class='btn-group mr-2'>
              <button type='button' class='btn btn-sm btn-outline-secondary'>Share</button>
              <a href="excel.php?id=<?= $_GET['id'] ?>" role="button" type='button' class='btn btn-sm btn-outline-secondary'>Exportar</a>
            </div>
            <button type='button' class='btn btn-sm btn-outline-secondary dropdown-toggle'>
              <span data-feather='calendar'></span>
              This week
            </button>
          </div>
        </div>
        <h2><?= $detalleProspecto['nombre'].' '.$detalleProspecto['apellidopaterno'] ?></h2>
        <div class='table-responsive'>
          <form>
            <div class="form-row">
              <div class="form-group input-group-sm col-md-4">
                <label for="inputNombre">Nombre</label>
                <input type="text" class="form-control disable" placeholder="<?= $detalleProspecto['nombre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputApellidoPaterno">Apellido Paterno</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['apellidopaterno']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputApellidoMaterno">Apellido Materno</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['apellidomaterno']?>" disabled>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group input-group-sm col-md">
                <label for="inputCalleYNumero">Calle y Num.</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['calle']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputColonia">Colonia</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['colonia']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputCiudad">Ciudad</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['ciudad']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputEstado">Estado</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['estado']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputCP">C.P</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['codigopostal']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputPais">Pais</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['pais']?>" disabled>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group input-group-sm col-md">
                <label for="inputTelFijo">Tel. Fijo</label>
                <input type="tel" class="form-control" placeholder="<?= $detalleProspecto['telefono']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputCelular">Celular</label>
                <input type="tel" class="form-control" placeholder="<?= $detalleProspecto['celular']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" placeholder="<?= $detalleProspecto['correo']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputSexo">Sexo</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['sexo']?>" disabled>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group input-group-sm col-md">
                <label for="inputReligion">Religión</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['religion']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputBautizo">Bautizado</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['bautizado']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputDistrito">Distrito</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['distrito']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputAsociacion">Asociación o Misión</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['asociacionmision']?>" disabled>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group input-group-sm col-md">
                <label for="inputLugarNac">Lugar de Nac.</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['lugarnacimiento']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputNacionalidad">Nacionalidad</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['nacionalidad']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputFechaNac">Fecha de Nacimiento</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['fechanacimiento']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputEdad">Edad</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['edad']?>" disabled>
              </div>
            </div>
            <div class="form-row  align-items-center">
              <div class="form-group input-group-sm col-md">
                <label for="edoCivil">Estado Civil</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['estadocivil']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="edoCivil">¿Cómo te enteraste del Instituto Universitario del Sureste?</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['enterado']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Trabajo</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['trabajo']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Beca</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['beca'].' '.$detalleProspecto['porcentajebeca'].'%' ?>" disabled>
              </div>
            </div>

            <div class="form-row  align-items-center">
              <div class="form-group input-group-sm col-md">
                <label for="edoCivil">Tipo de sangre</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['tiposangre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="edoCivil">Impedimento Físico</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['impedimendofisico']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Enfermedad o alergia</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['enfermedadalergia']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Alergia a mediacmento</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['alergiamedicamento']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Seguro</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['seguro']?>" disabled>
              </div>
            </div>

            <div class="form-row  align-items-center">
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Carrera</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['carrera']?>" disabled>
              </div>
            </div>

            <div class="form-row  align-items-center">
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Nombre del padre</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['nombrepadre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Apellido Paterno</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['apellidopaternopadre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Apellido Materno</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['apellidomaternopadre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Dirección Permanente</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['direccionpadre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Celular</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['celularpadre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Ocupacion</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['ocupacionpadre']?>" disabled>
              </div>
            </div>

            <div class="form-row  align-items-center">
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Nombre de la madre</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['nombremadre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Apellido Paterno</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['apellidopaternomadre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Apellido Materno</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['apellidomaternomadre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Dirección Permanente</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['direccionmadre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Celular</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['celularmadre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Ocupacion</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['ocupacionmadre']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-12">
                <label for="inputTrabajo">Estado civil</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['edocivilpadres']?>" disabled>
              </div>
            </div>

            <div class="form-row  align-items-center">
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Nombre de patrocinador</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['nombrepatrocinador']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Apellido Paterno</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['apellidoppatrocinador']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Apellido Materno</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['apellidompatrocinador']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Calle y Numero</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['callepatrocinador']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Colonia</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['coloniapatrocinador']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-3">
                <label for="inputTrabajo">Ciudad</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['ciudadpatrocinador']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-3">
                <label for="inputTrabajo">Estado</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['estadopatrocinador']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-3">
                <label for="inputTrabajo">C.P</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['codigopostalpatrocinador']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-3">
                <label for="inputTrabajo">País</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['paispatrocinador']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Email</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['correopatrocinador']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Telefono</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['telefonopatrocinador']?>" disabled>
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Ocupación</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['ocupacion']?>" disabled>
              </div>
            </div>
            
          </form>
        </div>
      </main>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='assets/js/jquery-3.5.1.slim.min.js'></script>
    <script src='assets/js/popper.min.js'></script>
    <script src='assets/js/bootstrap.min.js'></script>

</html>