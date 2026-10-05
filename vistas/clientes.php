<?php
require_once "../conexion.php";
$sql = "SELECT * FROM clientes";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="contenedor">
        <aside class="sidebar">
            <h1>TRANSLOGÍSTICA</h1>

            <nav>
                <a href="../index.php">Inicio</a>
                <a href="" class="activo">Clientes</a>
                <a href="envios.php">Envíos</a>
                <a href="rutas.php">Rutas</a>
                <a href="vehiculos.php">Vehículos</a>
                <a href="satisfaccion.php">Satisfacción</a>
                <a href="analisis.php">Análisis</a>
            </nav>
        </aside>

        <main class="contenido">
            <div class="bienvenida">
                <h2>Clientes</h2>
                <p>
                    Información de los clientes registrados
                    en Translogística.
                </p>
            </div>


            <div class="tabla-contenedor">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Fecha de registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($cliente = $resultado->fetch_assoc()) { ?>
                            <tr>
                                <td>
                                    <?php echo $cliente['id_clientes']; ?>
                                </td>
                                <td>
                                    <?php echo $cliente['nombre']; ?>
                                </td>
                                <td>
                                    <?php echo $cliente['telefono']; ?>
                                </td>
                                <td>
                                    <?php echo $cliente['direccion']; ?>
                                </td>
                                <td>
                                    <?php echo $cliente['fecha_registro']; ?>
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