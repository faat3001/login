<?php
error_reporting(0);
require "conexion.php";
//aqui se tiene que recibir los paramtros que vienen desde android en formato json
//se tiene que decodificar el json

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];	
	

if(empty($usuario) || empty($contrasena)) {
	echo json_encode(array("mensaje" => "Se debe llenar los campos."), JSON_UNESCAPED_UNICODE);

} else if($usuario == "todos" || $contrasena == "todos" || $usuario == "TODOS" || $contrasena == "TODOS") {
   
	echo json_encode(array("mensaje" => "Ese usuario no existe"), JSON_UNESCAPED_UNICODE);
        
} else {
	//$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
	$sql = "SELECT * FROM users WHERE usuario='$usuario' AND contrasena='$contrasena'";
	$query = $mysqli->query($sql);

	$data = array();
	$num = $query->num_rows;

	if($num > 0) {
		while($resultado = $query->fetch_assoc()) {
			$data[] = $resultado;

			echo json_encode(array("usuario" => $data));
		}
	} else {
		echo json_encode(array("mensaje" => "No existe el registro con esos datos"), JSON_UNESCAPED_UNICODE);
        
	}
	$mysqli->close();
}

    
}else{
	echo json_encode(array("mensaje" => "Errorrrr"), JSON_UNESCAPED_UNICODE);
        
}
 
?>