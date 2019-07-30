<?php 


include "conexion.php";
$conexion=conexion();

$estado=$_POST['estadou'];
// echo "$estado";

if ($estado=="Activo") {
	$valor=1;
}else{
	$valor=0;
}

print_r($_POST);


$datos=array( 
    $conexion->real_escape_string(htmlentities($_POST['nombreu'])),
    $conexion->real_escape_string(htmlentities($_POST['apellidoPu'])),
    $conexion->real_escape_string(htmlentities($_POST['apellidoMu'])),
    $conexion->real_escape_string(htmlentities($_POST['telefonou'])),
    $conexion->real_escape_string(htmlentities($_POST['edadu'])),    
    // $conexion->real_escape_string(htmlentities($_POST['estadou'])),
    $valor,
    $conexion->real_escape_string(htmlentities($_POST['idu']))

    // $conexion->real_escape_string(htmlentities($_FILES['foto']["name"])),    

);
// echo $_FILES["file"]["name"];
// $echo " <script>
//  	console.log($datos[3]);
//  </script>";


// $str = strtoupper($str);



$sql="UPDATE t_persona set nombre=?,
							paterno=?,
							materno=?,
							telefono=?,
							edad=?,
							estado=?
							where id=?";

$query=$conexion->prepare($sql);
$query->bind_param('ssssiii',strtoupper($datos[0]),strtoupper($datos[1]),strtoupper($datos[2]),$datos[3],$datos[4],$datos[5],$datos[6]);
echo $query->execute();
$query->close();


 ?>

