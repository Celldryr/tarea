<?php
$conexion = new mysqli("127.0.0.1","root","","registro_db");

if($conexion->connect_error){
    die("conexion fallida: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO usuario (nombre, email, telefono) VALUES ('$nombre','$email','$telefono')";

if($conexion->query($sql)===true){
    header('location: Registrar_edad.html');
    exit();
} else {
    echo "error al insertar datos: " . $conexion->error;
}

$conexion->close();
?>