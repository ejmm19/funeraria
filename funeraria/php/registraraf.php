<?php
require_once "../php/conexion.php";

$fechafiliacion = utf8_decode($_POST['fechafiliacion']);
$nombre = utf8_decode($_POST['nombre']);
$valor = utf8_decode($_POST['valor']);
$apellidos = utf8_decode($_POST['apellidos']);
$id = utf8_decode($_POST['id']);
$direccion = utf8_decode($_POST['direccion']);
$sitioref = utf8_decode($_POST['sitioref']);
$vendedor = utf8_decode($_POST['vendedor']);
$ciudad = utf8_decode($_POST['ciudad']);
$diasc = utf8_decode($_POST['diasc']);
$telefono = utf8_decode($_POST['telefono']);




$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysql_select_db($db,$con)or die("no existe la base de datos");
	mysql_query("INSERT INTO clientes(identificacion,nombres,apellidos,telefono,direccion,fechaafiliacion,vendedor,ciudad,diasc,valor) VALUES ('$id','$nombre','$apellidos','$telefono','$direccion','$fechafiliacion','$vendedor','$ciudad','$diasc','$valor')",$con);

	echo '<div style="font-family:san-serif; font-size:24px; margin-top:20%; margin-left:40%;">Cliente Registrado con Exito!!!</div>
			<br><center><a href="../php/welcome.php?op=5" ><input type="submit" class="btn btn-primary" value="volver"></a></center>';







 
?>
