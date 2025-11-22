<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Software de Diseño</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <style>
        body {
            background: linear-gradient(120deg, #a1c4fd, #c2e9fb);
            min-height: 100vh;
        }
        .card-custom {
            background: #ffffffcc;
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .title {
            font-weight: 700;
            color: #003d73;
        }
        table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th {
            background: #003d73 !important;
            color: white !important;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="text-center mb-4">
        <h1 class="title">Catálogo de Software de Diseño</h1>
        <p class="lead">Agrega, edita o elimina softwares enfocados al diseño gráfico, industrial o técnico.</p>
    </div>

    <!-- Tabla -->
    <div class="card-custom mb-4">
        <h4 class="mb-3">Lista de Software</h4>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Software</th>
                    <th>Descripción</th>
                    <th style="width: 160px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM catalogo";
                $res = $conn->query($sql);

                while($row = $res->fetch_assoc()):
                ?>
                <tr>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['descripcion'] ?></td>
                    <td>
                        <a href="editar.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="eliminar.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    
    <div class="card-custom mb-5">
        <h4 class="mb-3">Agregar nuevo software</h4>

        <form method="POST" action="guardar.php">
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>

            <label class="form-label mt-3">Descripción:</label>
            <textarea name="descripcion" class="form-control" required></textarea>

            <button class="btn btn-primary mt-3">Agregar</button>
        </form>
    </div>

    
    <h3 class="title text-center mb-3">Recomendaciones de Software</h3>

    <div class="ratio ratio-16x9 mb-5">
        <iframe src="https://www.youtube.com/embed/lMqefxItqKM" allowfullscreen></iframe>
    </div>

</div>

</body>
</html>

