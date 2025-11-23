<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE softwares SET nombre = '$nombre', descripcion = '$descripcion' WHERE id = $id";
$conn->query($sql);

header("Location: index.php");
exit();
