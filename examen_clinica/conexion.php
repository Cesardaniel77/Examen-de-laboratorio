<?php
$conn=mysql_connect('localhost','root','123456');

if(!$conn){
echo "No se pudo conectar con el servidor";

}else{
$verificar=mysql_select_db('clinica_daniel');
if($verificar==$verificar){

echo "Est&aacute;s conectado, BIENVENIDO a Clinica CESDAN

";

    }
}

?>
