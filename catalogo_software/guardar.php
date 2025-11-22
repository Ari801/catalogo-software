<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO catalogo (nombre, descripcion) VALUES ('$nombre', '$descripcion')";
$conn->query($sql);

header("Location: index.php");
?>

