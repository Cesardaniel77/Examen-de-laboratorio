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
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];

echo ",ingrese los datos del paciente, utilizando solo letras, luego presione enviar para adjuntarlo al registro de pacientes";
  $sql = "insert into pacientes(idpacientes,nombres,apellidos,direccion,telefono,edad,sexo) values ('$idpacientes','$nombres','$apellidos','$direccion','$telefono','$edad','$sexo')";


 ?>



<form action= "enviar_datos.php" method="post" name="formulario">
<input type = "text" name="idpacientes" placeholder=" Id del paciente"/>
 <input type = "text" name="nombres" placeholder="Nombres del paciente" />
 <input type = "text" name="apellidos" placeholder="Apellidos del paciente" />
 <input type = "text" name="direccion" placeholder="Dirección del paciente"/>
<input type = "text" name="telefono" placeholder="Telefono del paciente" />
<input type = "text" name="edad" placeholder="Edad del paciente"/>
 <input type = "text" name="sexo" placeholder="Sexo del paciente" />

<input type= "submit" value="Enviar"/>
</form>
<?php
$si=mysql_query($sql);
?>


</body>
<html>
