<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="usuario" placeholder="ingresa tu usuario" value="">
      <input type="password" name="password"placeholder= "ingresa tu contraseña "value="">
      <input type="submit" name="" value="enviar">
    </form>
  </body>
</html>

<?php
if(isset($_POST['sesion'])){
  include 'conexion.php';
  $sql = "select count(usuario) as conteo from sesion where usuario='{$_POST['usuario']}' and password ='{$_POST['password']}';";
  $query = mysqli_query($conn,$sql);
  $resultado = mysqli_fetch_assoc($query);
  if($resultado['conteo']==1){
    session_start();
    $_SESSION['usuario'] = $_POST['usuario'];
  } else {
    session_start();
    $_SESSION['usuario'] = null;
  }
}
 ?>
