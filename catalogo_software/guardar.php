<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO softwares (nombre, descripcion) VALUES (:n, :d)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':n', $nombre);
$stmt->bindParam(':d', $descripcion);

$stmt->execute();

header("Location: index.php");
exit();
?>



