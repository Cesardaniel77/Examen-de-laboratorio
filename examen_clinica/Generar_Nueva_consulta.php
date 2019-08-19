<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Datos</title>
  </head>
  <body>
<?php
include('conexion.php');
$idpacientes=$_POST['idpacientes'];
$fecha=$_POST['fecha'];
$sintomas=$_POST['sintomas'];
$receta=$_POST['receta'];

echo ",ingrese los siguientes datos para generar la consulta, utilizando solo letras, luego presione enviar para adjuntarlo a todas las consultas";
  $sql = "insert into consultas(idpacientes,fecha,sintomas,receta) values ('$idpacientes','$fecha','$sintomas','$receta')";


 ?>



<form action= "Generar_Nueva_consulta.php" method="post" name="formulario">
<input type = "text" name="idpacientes" placeholder=" Id del paciente"/>
 <input type = "text" name="fecha" placeholder= "año-mes-dia" />
 <input type = "text" name="sintomas" placeholder="Sintomas del paciente" />
 <input type = "text" name="receta" placeholder="Receta médica"/>

<input type= "submit" value="Enviar"/>
</form>
<?php
$si=mysql_query($sql);
?>


</body>
<html>
