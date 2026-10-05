<?php
require_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translogística</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="contenedor">
        <aside class="sidebar">
    <h1>
        TRANSLOGISTICA
        <img src="imagenes/image.png" alt="Logo de trasnlogistica">

        
            <nav>
                <a href="index.php" class="activo">Inicio</a>
                <a href="vistas/clientes.php">Clientes</a>
                <a href="vistas/envios.php">Envíos</a>
                <a href="vistas/rutas.php">Rutas</a>
                <a href="vistas/vehiculos.php">Vehículos</a>
                <a href="vistas/satisfaccion.php">Satisfacción</a>
                <a href="vistas/analisis.php">Análisis</a>
            </nav>
        </aside>

        <main class="contenido">
            <section class="bienvenida">

                <h2>Bienvenido a Translogística</h2>
                <p>
                    Sistema de gestión y análisis de información
                    para el transporte y distribución de paquetes.
                </p>

            </section>

            <section class="tarjetas">

                <div class="tarjeta">
                    <h3>Clientes</h3>
                    <p>Gestiona la información de los clientes.</p>
                    <a href="vistas/clientes.php">Ver clientes</a>
                </div>

                <div class="tarjeta">
                    <h3>Envíos</h3>
                    <p>Consulta y gestiona los envíos registrados.</p>
                    <a href="vistas/envios.php">Ver envíos</a>
                </div>

                <div class="tarjeta">
                    <h3>Rutas</h3>
                    <p>Consulta las rutas utilizadas para los envíos.</p>
                    <a href="vistas/rutas.php">Ver rutas</a>
                </div>

                <div class="tarjeta">
                    <h3>Vehículos</h3>
                    <p>Consulta los vehículos disponibles.</p>
                    <a href="vistas/vehiculos.php">Ver vehículos</a>
                </div>

                <div class="tarjeta">
                    <h3>Satisfacción</h3>
                    <p>Consulta las calificaciones de los clientes.</p>
                    <a href="vistas/satisfaccion.php">Ver satisfacción</a>
                </div>

                <div class="tarjeta">
                    <h3>Análisis</h3>
                    <p>Consulta los resultados del análisis de datos.</p>
                    <a href="vistas/analisis.php">Ver análisis</a>
                </div>
            </section>
        </main>
    </div>
</body>
</html>