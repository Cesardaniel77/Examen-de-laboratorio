<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultas realizadas en clinicas CESDAN</title>
  </head>
  <body>
    <?php
    include 'conexion.php';
    $sql="select * from consultas";
    $regresar=mysql_query($sql);
     ?>
     <div>
       <table border="1">
         <thead>
           <tr>
             <th>idpacientes</th>
             <th>fecha</th>
             <th>sintomas</th>
             <th>recetas</th>

         </tr>
    </thead>
    <tbody>
      <?php while ($filas=mysql_fetch_assoc($regresar)){
         ?>
      <tr>
             <td><?php echo $filas['idpacientes'] ?></td>
             <td><?php echo $filas['fecha'] ?></td>
             <td><?php echo $filas['sintomas'] ?></td>
             <td><?php echo $filas['receta'] ?></td>

        </td>
       </tr>
     <?php } ?>
 </table>
   </div>

 </tbody>

  </body>
</html>
<?php
  echo "No se puede editar ni alterar el registro de consultas"
  ?>
