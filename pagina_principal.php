<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['correo']))
    {
        $nombre_usuario = $_SESSION['username'];
        $correo_usuario = $_SESSION['correo'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Barra superior del menú */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #2C3E50;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .navbar h1 {
            margin: 0;
            font-size: 1.8rem;
        }

        .user-info {
            font-size: 1rem;
        }

        /* Estilos del menú desplegable */
        .menu {
            display: flex;
            gap: 20px;
            position: relative;
        }

        h3 {
            color: white;
            margin: 0;
            cursor: pointer;
            position: relative; /* Asegura que el dropdown esté relacionado al h3 */
            font-size: 1rem;
        }

        h3:after {
            content: '\25BC'; /* Flecha hacia abajo */
            position: absolute;
            right: -20px;
            font-size: 0.8em;
            color: white;
            transition: transform 0.3s;
        }

        h3.active:after {
            transform: rotate(180deg); /* Gira la flecha */
        }

        /* Ocultar los contenidos de las secciones */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            color: #333;
            padding: 10px;
            border-radius: 5px;
            top: 100%; /* Asegura que el dropdown aparezca justo debajo de h3 */
            left: 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1001; /* Asegura que el menú se superponga sobre otros elementos */
            min-width: 150px; /* Ajusta el ancho mínimo */
        }

        .dropdown-content a {
            display: block;
            background-color: #3498DB;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin: 5px 0;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #2980B9;
        }

        /* Mostrar el contenido desplegable cuando la clase está activa */
        .dropdown-content.active {
            display: block;
        }

        /* Contenedor principal */
        #contenedor_principal {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 700px;
            text-align: center;
            margin-top: 120px; /* Ajustamos el margen superior para evitar que el contenedor se solape con la barra de navegación */
        }

        /* Estilo para los párrafos de usuario */
        p {
            color: #555;
            font-size: 18px;
            margin: 10px 0;
        }

        /* Estilo para botones de acción */
        .action-button {
            display: inline-block;
            background-color: #E74C3C;
            color: white;
            padding: 12px 30px;
            margin-top: 20px;
            border-radius: 5px;
            font-size: 18px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .action-button:hover {
            background-color: #C0392B;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación superior -->
    <div class="navbar">
        <h1>Zapateria La Sangileña</h1>
        <div class="user-info">
            <p>Nombre: <?php echo $nombre_usuario; ?></p>
            <p>Usuario: <?php echo $correo_usuario; ?></p>
        </div>
        <div class="menu">
            <h3>Registros</h3>
            <div class="dropdown-content">
                <a href="registrar_fabricante.php">Fabricante</a>
                <a href="registrar_articulo.php">Artículo</a>
            </div>

            <h3>Consultas</h3>
            <div class="dropdown-content">
                <a href="#">Consulta 1</a>
                <a href="#">Consulta 2</a>
            </div>

            <h3>Actualizaciones</h3>
            <div class="dropdown-content">
                <a href="#">Actualizar 1</a>
                <a href="#">Actualizar 2</a>
            </div>

            <h3>Eliminaciones</h3>
            <div class="dropdown-content">
                <a href="#">Eliminar 1</a>
                <a href="#">Eliminar 2</a>
            </div>

            <h3>Cerrar Sesión</h3>
            <div class="dropdown-content">
                <a href="cerrar_sesion.php">Cerrar Sesión</a>
            </div>
        </div>
    </div>

    <!-- Contenido principal -->
    <div id="contenedor_principal">
        <h1>Bienvenido a la Zapateria Sangileña</h1>
        <p>Aquí puedes gestionar tus operaciones de manera eficiente.</p>
    </div>

    <script>
        // JavaScript para activar el menú desplegable
        document.querySelectorAll('.menu h3').forEach(h3 => {
            h3.addEventListener('click', function() {
                this.classList.toggle('active');
                this.nextElementSibling.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
