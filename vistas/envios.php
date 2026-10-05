<?php
require_once "../conexion.php";
$sql = "SELECT * FROM envios";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envíos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="contenedor">
        <aside class="sidebar">

            <h1>TRANSLOGÍSTICA</h1>

            <nav>
                <a href="../index.php">Inicio</a>
                <a href="clientes.php">Clientes</a>
                <a href="envios.php" class="activo">Envíos</a>
                <a href="rutas.php">Rutas</a>
                <a href="vehiculos.php">Vehículos</a>
                <a href="satisfaccion.php">Satisfacción</a>
                <a href="analisis.php">Análisis</a>
            </nav>
        </aside>

        <main class="contenido">
            <div class="bienvenida">

                <h2>Envíos</h2>

                <p>
                    Información de los envíos registrados
                    en Translogística.
                </p>
            </div>


            <div class="tabla-contenedor">
                <table>
                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Ruta</th>
                            <th>Nro. guía</th>
                            <th>Descripción</th>
                            <th>Fecha de envío</th>
                            <th>Destino</th>
                            <th>Estado</th>
                            <th>Precio</th>
                            <th>Tiempo de entrega</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php while ($envio = $resultado->fetch_assoc()) { ?>

                            <tr>
                                <td>
                                    <?php echo $envio['id_envio']; ?>
                                </td>
                                <td>
                                    <?php echo $envio['id_clientes']; ?>
                                </td>
                                <td>
                                    <?php echo $envio['id_rutas']; ?>
                                </td>
                                <td>
                                    <?php echo $envio['nro_guía']; ?>
                                </td>
                                <td>
                                    <?php echo $envio['descripcion']; ?>
                                </td>
                                <td>
                                    <?php echo $envio['fecha_envio']; ?>
                                </td>
                                <td>
                                    <?php echo $envio['destino']; ?>
                                </td>
                                <td>
                                    <?php echo $envio['estado']; ?>
                                </td>
                                <td>
                                    <?php echo $envio['precio_envío']; ?>
                                </td>
                                <td>
                                    <?php echo $envio['tiempo_entrega']; ?>
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