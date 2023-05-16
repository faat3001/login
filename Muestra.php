<?php
    
     require "conexión.php"; // IMPORTA LOS DATOS DE CONEXION DE LA DB
    
     $accion = $_POST [ 'accion' ];
     $mensaje = $_POST [ 'mensaje' ];
    
    // PARA PRUEBAS
    //$accion = "nuevo";
    //$mensaje = "MENSAJE";
    
    // PARA INSERTAR MENSAJE EN LA DB
    if ( $accion == "nuevo") {
      //$sql_insert = "INSERT INTO mensajes VALUES('', '$mensaje')";
        $sql_insert = "INSERT INTO gestion_eecc VALUES('', '$mensaje')";        
        $consulta = $mysqli -> query ( $sql_insert );

      //$sql_consult = "SELECT * FROM mensajes";
        $sql_consult = "SELECT * FROM gestion_eecc";
        $consulta = $mysqli -> query ( $sql_consult );
        
        $datos = array();
        
        $num = $consulta->num_filas;
        
        if($num > 0) {
            while ( $resultado = $query -> fetch_assoc()) {
                $datos[] = $resultado ;
            }
            echo json_encode( array("mensajes" => $datos ));
        }
        
        
        $mysqli -> close();

        
    } else {
        // PARA OBTENER LOS MENSAJES
      //$sql_consult = "SELECT * FROM mensajes";
        $sql_consult = "SELECT * FROM gestion_eecc";        
        $consulta = $mysqli -> query( $sql_consult );
        
        $datos = array();
        
        $num = $consulta->num_filas;
        
        if($num > 0) {
            while ( $resultado = $query -> fetch_assoc()) {
                $datos [] = $resultado ;
            }
            echo json_encode( array("mensajes" => $datos ));
        //
        }
        $mysqli -> close();
    }
    
     ?>

