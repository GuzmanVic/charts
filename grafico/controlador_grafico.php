<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "graficos";
    require 'modelo_grafico.php';
    require_once('conexion.php');

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
     echo json_encode(  die("La conexión a la base de datos falló: " . mysqli_connect_error()));
    }
    $sql = "SELECT * FROM `productos` WHERE 1";	
    $resultado = mysqli_query($conn, $sql);
    if (mysqli_num_rows($resultado) > 0) {
    
        while ($consulta_VU = mysqli_fetch_array($resultado)) {
            $arreglo[] = $consulta_VU;
            
        }
        echo json_encode($arreglo);
    } else {
        echo "No se encontraron resultados.";
    }
  
 