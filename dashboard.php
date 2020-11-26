<?php

require_once 'includes/conexion.php';
require_once 'includes/helpers.php';

if (!isset($_SESSION['usuario_admin'])) {
    header('Location: index.php');
}

?>
<!doctype html>
<html lang='es'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Dashboard | <?= isset($_SESSION['usuario_admin']) ? $_SESSION['usuario_admin']['nombre'] : '' ?> </title>

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
                    </ul>

                    <h6
                        class='sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted'>
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
                </div>
            </nav>

            <main role='main' class='col-md-9 ml-sm-auto col-lg-10 px-md-4'>
                <div
                    class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
                    <h1 class='h2'>Dashboard</h1>
                    <div class='btn-toolbar mb-2 mb-md-0'>
                        <button type='button' class='btn btn-sm btn-outline-secondary dropdown-toggle'>
                            <span data-feather='calendar'></span>
                            This week
                        </button>
                    </div>
                </div>
                <h2>Section title</h2>
                <div class='table-responsive'>
                    <table class='table table-striped table-sm'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Carrera</th>
                                <th>Panel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $prospectos = listarProstectos( $conexion );
                            if (!empty($prospectos)) :
                            while ( $prospecto = mysqli_fetch_assoc( $prospectos ) ) : ?>
                            <tr>
                                <td> <?= $prospecto['id'] ?> </td>
                                <td> <?= $prospecto['nombre'] ?> </td>
                                <td> <?= $prospecto['apellidopaterno'].' '.$prospecto['apellidomaterno'] ?> </td>
                                <td> <?= $prospecto['carrera'] ?> </td>
                                <td> <a href="prospecto_detalle.php?id=<?= $prospecto['id'] ?> " type="button"
                                        class="btn btn-outline-success btn-sm">Ver Infromación</a> </td>
                            </tr>
                            <?php
                            endwhile;
                            endif;
                            ?>
                        </tbody>
                        <?php  ?>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='assets/js/jquery-3.5.1.slim.min.js'></script>
    <script src='assets/js/popper.min.js'></script>
    <script src='assets/js/bootstrap.min.js'></script>

</html>