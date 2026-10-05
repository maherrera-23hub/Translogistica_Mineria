<?php
require_once "../conexion.php";
$sql = "SELECT * FROM satisfacción";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satisfacción - Translogística</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="contenedor">

        <aside class="sidebar">
            <h1>TRANSLOGÍSTICA</h1>
            <nav>
                <a href="../index.php">Inicio</a>
                <a href="clientes.php">Clientes</a>
                <a href="envios.php">Envíos</a>
                <a href="rutas.php">Rutas</a>
                <a href="vehiculos.php">Vehículos</a>
                <a href="satisfaccion.php" class="activo">Satisfacción</a>
                <a href="analisis.php">Análisis</a>
            </nav>
        </aside>


        <main class="contenido">
            <div class="bienvenida">
                <h2>Satisfacción de clientes</h2>
                <p>
                    Consulta las calificaciones y comentarios
                    registrados sobre el servicio.
                </p>
            </div>


            <div class="tabla-contenedor">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Comentario</th>
                            <th>Calificación</th>
                            <th>Fecha de calificación</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($satisfaccion = $resultado->fetch_assoc()) { ?>
                            <tr>
                                <td>
                                    <?php echo $satisfaccion['id_encuesta']; ?>
                                </td>
                                <td>
                                    <?php echo $satisfaccion['opinion']; ?>
                                </td>
                                <td>
                                    <?php echo $satisfaccion['calificacion']; ?>
                                </td>
                                <td>
                                    <?php echo $satisfaccion['fecha_encuesta']; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>