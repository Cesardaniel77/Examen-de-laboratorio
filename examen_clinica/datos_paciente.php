<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Datos de pacientes en CESDAN</title>
  </head>
  <body>
    <?php
    include 'conexion.php';
    $sql="select * from pacientes";
    $regresar=mysql_query($sql);
     ?>
     <div>
       <table border="1">
         <thead>
           <tr>
             <th>idpacientes</th>
             <th>nombres</th>
             <th>apellidos</th>
             <th>direccion</th>
             <th>telefono</th>
             <th>edad</th>
             <th>sexo</th>

         </tr>
    </thead>
    <tbody>
      <?php while ($filas=mysql_fetch_assoc($regresar)){
         ?>
      <tr>
             <td><?php echo $filas['idpacientes'] ?></td>
             <td><?php echo $filas['nombres'] ?></td>
             <td><?php echo $filas['apellidos'] ?></td>
             <td><?php echo $filas['direccion'] ?></td>
             <td><?php echo $filas['telefono'] ?></td>
             <td><?php echo $filas['edad'] ?></td>
             <td><?php echo $filas['sexo'] ?></td>

        </td>
       </tr>
     <?php } ?>
 </table>
   </div>

 </tbody>

  </body>
</html>
