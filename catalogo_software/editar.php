<?php
include("conexion.php");

$id = $_GET['id'];
$sql = "SELECT * FROM catalogo WHERE id = $id";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar software</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 card p-4 shadow">
    <h2 class="mb-4">Editar software</h2>

    <form method="POST" action="actualizar.php">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <label>Nombre:</label>
        <input type="text" class="form-control" name="nombre" value="<?= $row['nombre'] ?>" required>

        <label class="mt-3">Descripción:</label>
        <textarea name="descripcion" class="form-control" required><?= $row['descripcion'] ?></textarea>

        <button class="btn btn-success mt-3">Guardar cambios</button>
        <a class="btn btn-secondary mt-3" href="index.php">Cancelar</a>
    </form>
</div>

</body>
</html>
