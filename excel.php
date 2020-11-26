<?php 

require_once 'includes/conexion.php';
require_once 'includes/helpers.php';

$detalleProspecto =  getProspecto($conexion, $_GET['id']);

header("Pragma: public");
header("Expires: 0");
$filename = "informacion general ".$detalleProspecto['nombre'].' '.$detalleProspecto['apellidopaterno'].' '.$detalleProspecto['apellidomaterno'].".xls";
header("Content-Type: application/vnd.ms-excel charset=iso-8859-1");
header('Content-Type: charset=utf-8');
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

?>


<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apelliod Paterno</th>
      <th>Apelliod Materno</th>
      <th>Calle y Num.</th>
      <th>Colonia</th>
      <th>Ciudad.</th>
      <th>Estado</th>
      <th>Codigo Postal</th>
      <th>País</th>
      <th>Telefono</th>
      <th>Celular</th>
      <th>Correo</th>
      <th>Sexo</th>
      <th>Religión</th>
      <th>Bautizado</th>
      <th>Distrito</th>
      <th>Asociación/Misión</th>
      <th>Lugar de nacimiento</th>
      <th>Nacionalidad</th>
      <th>Fecha de nacimiento</th>
      <th>Edad</th>
      <th>Estado civil</th>
      <th>¿Cómo te enteraste del Instituto Universitario del Sureste?</th>
      <th>Trabajo</th>
      <th>Beca</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $detalleProspecto['nombre']?></td>
      <td><?= $detalleProspecto['apellidopaterno']?></td>
      <td><?= $detalleProspecto['apellidomaterno']?></td>
      <td><?= $detalleProspecto['calle']?></td>
      <td><?= $detalleProspecto['colonia']?></td>
      <td><?= $detalleProspecto['ciudad']?></td>
      <td><?= $detalleProspecto['estado']?></td>
      <td><?= $detalleProspecto['codigopostal']?></td>
      <td><?= $detalleProspecto['pais']?></td>
      <td><?= $detalleProspecto['telefono']?></td>
      <td><?= $detalleProspecto['celular']?></td>
      <td><?= $detalleProspecto['correo']?></td>
      <td><?= $detalleProspecto['sexo']?></td>
      <td><?= $detalleProspecto['religion']?></td>
      <td><?= $detalleProspecto['bautizado']?></td>
      <td><?= $detalleProspecto['distrito']?></td>
      <td><?= $detalleProspecto['asociacionmision']?></td>
      <td><?= $detalleProspecto['lugarnacimiento']?></td>
      <td><?= $detalleProspecto['nacionalidad']?></td>
      <td><?= $detalleProspecto['fechanacimiento']?></td>
      <td><?= $detalleProspecto['edad']?></td>
      <td><?= $detalleProspecto['estadocivil']?></td>
      <td><?= $detalleProspecto['enterado']?></td>
      <td><?= $detalleProspecto['trabajo']?></td>
      <td><?= $detalleProspecto['beca']?></td>
    </tr>
  </tbody>
</table>