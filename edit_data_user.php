<?php

require_once 'includes/conexion.php';
require_once 'includes/helpers.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

$detalleProspecto =  getProspecto($conexion, $_SESSION['usuario']['id']);

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
                            <a class='nav-link' href='dashboard_user.php'>
                                <span data-feather='home'></span>
                                Dashboard <span class='sr-only'>( current )</span>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link active' href='edit_data_user.php'>
                                <span data-feather='file'></span>
                                Editar Datos
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role='main' class='col-md-9 ml-sm-auto col-lg-10 px-md-4'>
        <div
          class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
          <h1 class='h2'>Editar información</h1>
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
          <form>
            <div class="form-row">
              <div class="form-group input-group-sm col-md">
                <label for="inputCalleYNumero">Calle y Num.</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['calle']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputColonia">Colonia</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['colonia']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputCiudad">Ciudad</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['ciudad']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputEstado">Estado</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['estado']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputCP">C.P</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['codigopostal']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputPais">Pais</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['pais']?>">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group input-group-sm col-md">
                <label for="inputTelFijo">Tel. Fijo</label>
                <input type="tel" class="form-control" placeholder="<?= $detalleProspecto['telefono']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputCelular">Celular</label>
                <input type="tel" class="form-control" placeholder="<?= $detalleProspecto['celular']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputReligion">Religión</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['religion']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputBautizo">Bautizado</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['bautizado']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputDistrito">Distrito</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['distrito']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputAsociacion">Asociación o Misión</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['asociacionmision']?>">
              </div>
            </div>

            <div class="form-row  align-items-center">
              <div class="form-group input-group-sm col-md">
                <label for="inputEdad">Edad</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['edad']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="edoCivil">Estado Civil</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['estadocivil']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Trabajo</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['trabajo']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Beca</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['beca'] ?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Porcentaje</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['porcentajebeca'].'%' ?>">
              </div>
            </div>

            <div class="form-row  align-items-center">
              <div class="form-group input-group-sm col-md">
                <label for="edoCivil">Tipo de sangre</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['tiposangre']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="edoCivil">Impedimento Físico</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['impedimendofisico']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Enfermedad o alergia</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['enfermedadalergia']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Alergia a mediacmento</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['alergiamedicamento']?>">
              </div>
            </div>

            <div class="form-row">
              <h6>Datos de tu padre</h6>
            </div>

            <div class="form-row  align-items-center">
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Dirección Permanente</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['direccionpadre']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Celular</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['celularpadre']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Ocupacion</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['ocupacionpadre']?>">
              </div>
            </div>

            <div class="form-row">
              <h6>Datos de tu madre</h6>
            </div>

            <div class="form-row  align-items-center">
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Dirección Permanente</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['direccionmadre']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Celular</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['celularmadre']?>">
              </div>
              <div class="form-group input-group-sm col-md">
                <label for="inputTrabajo">Ocupacion</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['ocupacionmadre']?>">
              </div>
              <div class="form-group input-group-sm col-md-12">
                <label for="inputTrabajo">Estado civil</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['edocivilpadres']?>">
              </div>
            </div>

            <div class="form-row">
              <h6>Datos de tu patrocinador</h6>
            </div>

            <div class="form-row  align-items-center">
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Nombre de patrocinador</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['nombrepatrocinador']?>">
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Apellido Paterno</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['apellidoppatrocinador']?>">
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Apellido Materno</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['apellidompatrocinador']?>">
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Calle y Numero</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['callepatrocinador']?>">
              </div>
              <div class="form-group input-group-sm col-md-4">
                <label for="inputTrabajo">Colonia</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['coloniapatrocinador']?>">
              </div>
              <div class="form-group input-group-sm col-md-3">
                <label for="inputTrabajo">Ciudad</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['ciudadpatrocinador']?>">
              </div>
              <div class="form-group input-group-sm col-md-3">
                <label for="inputTrabajo">Estado</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['estadopatrocinador']?>">
              </div>
              <div class="form-group input-group-sm col-md-3">
                <label for="inputTrabajo">C.P</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['codigopostalpatrocinador']?>">
              </div>
              <div class="form-group input-group-sm col-md-3">
                <label for="inputTrabajo">País</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['paispatrocinador']?>">
              </div>
              <div class="form-group input-group-sm col-md-3">
                <label for="inputTrabajo">Email</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['correopatrocinador']?>">
              </div>
              <div class="form-group input-group-sm col-md-3">
                <label for="inputTrabajo">Telefono</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['telefonopatrocinador']?>">
              </div>
              <div class="form-group input-group-sm col-md-3">
                <label for="inputTrabajo">Ocupación</label>
                <input type="text" class="form-control" placeholder="<?= $detalleProspecto['ocupacion']?>">
              </div>
            </div>
            
          </form>
      </main>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='assets/js/jquery-3.5.1.slim.min.js'></script>
    <script src='assets/js/popper.min.js'></script>
    <script src='assets/js/bootstrap.min.js'></script>

</html>