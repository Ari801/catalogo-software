<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM softwares WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

header("Location: index.php");
exit();
?>


