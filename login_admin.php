<?php 
require_once 'includes/conexion.php';
?>
<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="css/custom.css">

  <title>Hello, world!</title>
</head>

<body>
  <header class="container-fluid text-center">
    <img class="img-fluid"
      src="http://iunis.edu.mx/aulavirtual/pluginfile.php/1/theme_eguru/logo/1597942051/logoIUNIS.Transparente179x151px.fw.png"
      alt="logo">
    <h3>Departamento de Servicios Escolares</h3>
  </header>
  <main>
    <section class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <div class="float-right text-admin">
                <h3 class="p-1">Administración</h3>
            </div>
          <div class="p-5 shadow">
            <form method="POST" action="login/login_admin.php">
              <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="email" name="usuario" class="form-control input-green" id="usuario" required>
              </div>
              <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" class="form-control input-green" id="password" required>
                <?php echo isset($_SESSION['error_login']) ? $_SESSION['error_login'] : ''; ?>
              </div>
              <button type="submit" class="btn btn-success">Ingresar</button>
            </form>
          </div>
        </div>
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