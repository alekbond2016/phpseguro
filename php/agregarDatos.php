<?php 


include "conexion.php";
$conexion=conexion();

$estado=$_POST['estado'];
// echo "$estado";

if ($estado=="Activo") {
	$valor=1;
}else{
	$valor=0;
}
// print_r($_POST);


$datos=array( 
    $conexion->real_escape_string(htmlentities($_POST['nombre'])),
    $conexion->real_escape_string(htmlentities($_POST['apellidoP'])),
    $conexion->real_escape_string(htmlentities($_POST['apellidoM'])),
    $conexion->real_escape_string(htmlentities($_POST['telefono'])),
    $conexion->real_escape_string(htmlentities($_POST['edad'])),    
    // $conexion->real_escape_string(htmlentities($_POST['estado']))
    $valor
    // $conexion->real_escape_string(htmlentities($_FILES['foto']["name"])),    

);
// echo $_FILES["file"]["name"];
// $echo " <script>
//  	console.log($datos[3]);
//  </script>";


// $str = strtoupper($str);

$sql="INSERT into t_persona(nombre,paterno,materno,telefono,edad,estado)
values (?,?,?,?,?,?)";

$query=$conexion->prepare($sql);
$query->bind_param('ssssii',strtoupper($datos[0]),strtoupper($datos[1]),strtoupper($datos[2]),$datos[3],$datos[4],$datos[5]);
echo $query->execute();
$query->close();


 ?>

