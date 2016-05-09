<?php
/*
@$nombreM = $_REQUEST['nombreM'];
@$apellidoM = $_REQUEST['apellidoM'];
@$mailM = $_REQUEST['mailM'];
@$asuntoM = $_REQUEST['asuntoM'];
@$comentarioM = $_REQUEST['comentarioM'];
*/
@$nombre = $_REQUEST['nombre'];
//@$apellido = $_REQUEST['apellido'];
@$mail = $_REQUEST['mail'];
@$asunto = $_REQUEST['asunto'];
@$comentario = $_REQUEST['comentario'];

	date_default_timezone_set("America/Santiago");
	$date =  date("Y-m-d h:i:sa");
	$timestamp = date('Y-m-d H:i:s', strtotime($date));

	include_once 'config.php';
		
	$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
	$acentos = $conexion->query("SET NAMES 'utf8'");
	
	if($nombre!=''){
		mysqli_query($conexion,"INSERT INTO contacto_almacenero(nombre,email,asunto,comentario,fecha) values
										('$nombre',										
										'$mail',
										'$asunto',
										'$comentario',
										'$timestamp'
										)")
									or die("Problemas con el insert de contacto");
	}
	/*
	if($nombreM!=''){
		mysqli_query($conexion,"INSERT INTO contacto_almacenero(nombre,apellido,email,asunto,comentario) values
										('$nombreM',
										'$apellidoM',
										'$mailM',
										'$asuntoM',
										'$comentarioM'
										)")
									or die("Problemas con el insert de contacto");
	}
	*/
	header('Location: index.php');

?>