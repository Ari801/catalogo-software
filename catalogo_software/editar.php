<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM softwares WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Software</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<h3>Editar Software</h3>

<form method="POST" action="actualizar.php">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?= $row['nombre'] ?>" required>

    <label class="form-label mt-3">Descripción</label>
    <textarea class="form-control" name="descripcion" required><?= $row['descripcion'] ?></textarea>

    <button class="btn btn-primary mt-3">Guardar cambios</button>
</form>

</body>
</html>

