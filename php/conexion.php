<?php 
function conexion(){
	$conexion= new mysqli("127.0.0.1","root","","csv_db");
	if ($conexion->connect_errno) {
		echo "Fallo al conectat:".$conexion->connect_error;
	} 
	$conexion->set_charset("utf8");

	return $conexion;
	
}



 ?>
