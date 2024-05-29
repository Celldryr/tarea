<?php
$conexion = new mysqli("127.0.0.1","root","","registro_db");

if($conexion->connect_error){
    die("conexion fallida: " . $conexion->connect_error);
}

$edad = $_POST['edad'];

$sql = "INSERT INTO edad (edad) VALUES ('$edad')";

if($conexion->query($sql)===true){
    echo "edad registrada";
} else {
    echo "error al insertar datos: " . $conexion->error;
}

$conexion->close();
?>