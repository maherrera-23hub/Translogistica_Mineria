<?php
require_once "../conexion.php";
$sql = "SELECT * FROM vehiculos";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehículos - Translogística</title>
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
                <a href="vehiculos.php" class="activo">Vehículos</a>
                <a href="satisfaccion.php">Satisfacción</a>
                <a href="analisis.php">Análisis</a>
            </nav>

        </aside>

        <main class="contenido">
            <div class="bienvenida">
                <h2>Vehículos</h2>
                <p>
                    Información de los vehículos utilizados
                    para el transporte de los envíos.
                </p>
            </div>


            <div class="tabla-contenedor">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo de vehículo</th>
                            <th>Placa</th>
                            <th>Costos</th>
                            <th>Fecha de salida</th>
                            <th>GPS activo</th>
                            <th>Capacidad</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($vehiculo = $resultado->fetch_assoc()) { ?>
                            <tr>
                                <td>
                                    <?php echo $vehiculo['id_vehiculo']; ?>
                                </td>
                                <td>
                                    <?php echo $vehiculo['tipo_vehiculo']; ?>
                                </td>
                                <td>
                                    <?php echo $vehiculo['placa']; ?>
                                </td>
                                <td>
                                    <?php echo $vehiculo['costos']; ?>
                                </td>
                                <td>
                                    <?php echo $vehiculo['fecha_salida']; ?>
                                </td>
                                <td>
                                    <?php echo $vehiculo['gps_activo']; ?>
                                </td>
                                <td>
                                    <?php echo $vehiculo['capacidad']; ?>
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