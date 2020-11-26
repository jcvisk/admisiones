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
      <th>Tipo de sangre</th>
      <th>Impedimento físico</th>
      <th>Enfermedad o alergia</th>
      <th>Alergia a mediacmento</th>
      <th>Seguro</th>
      <th>Carrera</th>
      <th>Nombre del padre</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Dirección Permanente</th>
      <th>Celular</th>
      <th>Ocupacion</th>
      <th>Nombre de la madre</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Dirección Permanente</th>
      <th>Celular</th>
      <th>Ocupacion</th>
      <th>Nombre de patrocinador</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Calle y Numero</th>
      <th>Colonia</th>
      <th>Ciudad</th>
      <th>Estado</th>
      <th>C.P</th>
      <th>País</th>
      <th>Email</th>
      <th>Telefono</th>
      <th>Ocupación</th>
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
      <td><?= $detalleProspecto['tiposangre']?></td>
      <td><?= $detalleProspecto['impedimendofisico']?></td>
      <td><?= $detalleProspecto['enfermedadalergia']?></td>
      <td><?= $detalleProspecto['alergiamedicamento']?></td>
      <td><?= $detalleProspecto['seguro']?></td>
      <td><?= $detalleProspecto['carrera']?></td>
      <td><?= $detalleProspecto['nombrepadre']?></td>
      <td><?= $detalleProspecto['apellidopaternopadre']?></td>
      <td><?= $detalleProspecto['apellidomaternopadre']?></td>
      <td><?= $detalleProspecto['direccionpadre']?></td>
      <td><?= $detalleProspecto['celularpadre']?></td>
      <td><?= $detalleProspecto['ocupacionpadre']?></td>
      <td><?= $detalleProspecto['nombremadre']?></td>
      <td><?= $detalleProspecto['apellidopaternomadre']?></td>
      <td><?= $detalleProspecto['apellidomaternomadre']?></td>
      <td><?= $detalleProspecto['direccionmadre']?></td>
      <td><?= $detalleProspecto['celularmadre']?></td>
      <td><?= $detalleProspecto['ocupacionmadre']?></td>
      <td><?= $detalleProspecto['nombrepatrocinador']?></td>
      <td><?= $detalleProspecto['apellidoppatrocinador']?></td>
      <td><?= $detalleProspecto['apellidompatrocinador']?></td>
      <td><?= $detalleProspecto['callepatrocinador']?></td>
      <td><?= $detalleProspecto['coloniapatrocinador']?></td>
      <td><?= $detalleProspecto['ciudadpatrocinador']?></td>
      <td><?= $detalleProspecto['estadopatrocinador']?></td>
      <td><?= $detalleProspecto['codigopostalpatrocinador']?></td>
      <td><?= $detalleProspecto['paispatrocinador']?></td>
      <td><?= $detalleProspecto['correopatrocinador']?></td>
      <td><?= $detalleProspecto['telefonopatrocinador']?></td>
      <td><?= $detalleProspecto['ocupacion']?></td>
    </tr>
  </tbody>
</table>