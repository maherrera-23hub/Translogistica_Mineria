<?php
require_once "../conexion.php";

// Cantidad de clientes
$sql_clientes = "SELECT COUNT(*) AS total FROM clientes";
$resultado_clientes = $conexion->query($sql_clientes);
$total_clientes = $resultado_clientes->fetch_assoc()['total'];

// Cantidad de envíos
$sql_envios = "SELECT COUNT(*) AS total FROM envios";
$resultado_envios = $conexion->query($sql_envios);
$total_envios = $resultado_envios->fetch_assoc()['total'];

// Cantidad de vehículos
$sql_vehiculos = "SELECT COUNT(*) AS total FROM vehiculos";
$resultado_vehiculos = $conexion->query($sql_vehiculos);
$total_vehiculos = $resultado_vehiculos->fetch_assoc()['total'];

// Promedio de satisfacción
$sql_satisfaccion = "SELECT AVG(calificacion) AS promedio FROM satisfacción";
$resultado_satisfaccion = $conexion->query($sql_satisfaccion);
$promedio_satisfaccion = $resultado_satisfaccion->fetch_assoc()['promedio'];


$sql_estados = "
    SELECT estado, COUNT(*) AS cantidad
    FROM envios
    GROUP BY estado
";
$resultado_estados = $conexion->query($sql_estados);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisis</title>
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
                <a href="satisfaccion.php">Satisfacción</a>
                <a href="analisis.php" class="activo">Análisis</a>
            </nav>
        </aside>


        <main class="contenido">
            <div class="bienvenida">
                <h2>Análisis de datos</h2>
                <p>
                    Indicadores generales de Translogística
                    obtenidos a partir de la información registrada.
                </p>
            </div>


            <section class="indicadores">
                <div class="indicador">
                    <h3>Clientes</h3>
                    <strong>
                        <?php echo $total_clientes; ?>
                    </strong>
                    <p>Clientes registrados</p> 
                </div>
                <br>

                <div class="indicador">
                    <h3>Envíos</h3>
                    <strong>
                        <?php echo $total_envios; ?>
                    </strong>
                    <p>Envíos registrados</p>
                </div>
                <br>

                <div class="indicador">
                    <h3>Vehículos</h3>
                    <strong>
                        <?php echo $total_vehiculos; ?>
                    </strong>
                    <p>Vehículos registrados</p>
                </div>
                <br>

                <div class="indicador">
                    <h3>Satisfacción</h3>
                    <strong>
                        <?php echo number_format($promedio_satisfaccion, 1); ?>
                    </strong>
                    <p>Promedio de calificación</p>
                </div>
                <br>
            </section>


            <div class="tabla-contenedor">
                <h2>Estado de los envíos</h2>

                <br>

                <table>
                    <thead>
                        <tr>
                            <th>Estado</th>
                            <th>Cantidad de envíos</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php while ($estado = $resultado_estados->fetch_assoc()) { ?>
                            <tr>
                                <td>
                                    <?php echo $estado['estado']; ?>
                                </td>
                                <td>
                                    <?php echo $estado['cantidad']; ?>
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