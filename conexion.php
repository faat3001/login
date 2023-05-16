<?php
    //echo "Ingreso al archivo de conexion";
    // Variables de la conexion a la DB
    $mysqli = new mysqli("localhost","root","monetizac","chat");
    // en este orden: localhost, usuario, password, database
    //$mysqli = new mysqli("localhost","root","monetizac","monetizacion");    
    
    // Comprobamos la conexion
    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
       echo "Conexion exitosa..!!";
    }
    
    ?>