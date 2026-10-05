<?php
require_once "../conexion.php";
$sql = "SELECT * FROM rutas";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas - Translogística</title>
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
                <a href="rutas.php" class="activo">Rutas</a>
                <a href="vehiculos.php">Vehículos</a>
                <a href="satisfaccion.php">Satisfacción</a>
                <a href="analisis.php">Análisis</a>
            </nav>
        </aside>

        <main class="contenido">
            <div class="bienvenida">
                <h2>Rutas</h2>
                <p>
                    Información de las rutas utilizadas
                    para el transporte de los envíos.
                </p>
            </div>


            <div class="tabla-contenedor">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Origen</th>
                            <th>Destino</th>
                            <th>Distancia</th>
                            <th>Tiempo de ruta</th>
                            <th>Código postal</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($ruta = $resultado->fetch_assoc()) { ?>
                            <tr>
                                <td>
                                    <?php echo $ruta['id_ruta']; ?>
                                </td>
                                <td>
                                    <?php echo $ruta['origen']; ?>
                                </td>
                                <td>
                                    <?php echo $ruta['destino']; ?>
                                </td>
                                <td>
                                    <?php echo $ruta['distancia']; ?>
                                </td>
                                <td>
                                    <?php echo $ruta['tiempo_ruta']; ?>
                                </td>
                                <td>
                                    <?php echo $ruta['codigo_postal']; ?>
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