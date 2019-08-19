
<?php
include 'conexion.php';
$variable=$_POST['buscar3'];
$registros=mysql_query("select * from pacientes where nombres='$variable'");
while($registro=mysql_fetch_array($registros)){

echo "<b>Nombres:</b>",$registro['nombres'];
echo "<br>";
echo "<b>idpacientes:</b>",$registro['idpacientes'];
echo "<br>";
echo "<b>apellidos:</b>",$registro['apellidos'];
echo "<br>";
echo "<b>direccion:</b>",$registro['telefono'];
echo "<br>";
echo "<b>edad:</b>",$registro['edad'];
echo "<br>";
echo "<b>sexo:</b>",$registro['sexo'];
}
