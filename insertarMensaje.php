<?php

    require "conexion.php";
    
    $usuario = $_POST['usuario'];
    $usuarioDestino = $_POST['usuarioDestino'];
    $mensaje = $_POST['mensaje'];
    
    // PARA PRUEBAS
    //$usuario = "laura";
    //$usuarioDestino = "cheko";
    //$mensaje = "Bien y tu?";
    
    if(empty($usuario) || empty($usuarioDestino) || empty($mensaje)) {
        echo "No puedes entrar";
    } else {
        //$sql_insertar = "INSERT INTO mensajes VALUES('', '$mensaje', '$usuario', '$usuarioDestino')";
        $sql_insertar = "INSERT INTO gestion_eecc VALUES('', '$mensaje', '$usuario', '$usuarioDestino')";
        $query_insertar = $mysqli->query($sql_insertar);
        
        echo "Se inserto correctamente el mensaje.";
    }
?>