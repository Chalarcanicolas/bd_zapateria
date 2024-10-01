<?php
    require 'modelo/conexion.php';
    session_start();

    // Corregido $_SESSION en ambos casos
    if(isset($_SESSION['username']) && isset($_SESSION['correo'])) {
        $nombre_usuario = $_SESSION['username'];
        $correo_usuario = $_SESSION['correo'];
    } else {
        $nombre_usuario = "Invitado";
        $correo_usuario = "No disponible";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Sangileña</title>
    <style>
        /* Estilo del fondo y cuerpo */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Contenedor principal */
        #contenedor_principal {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        /* Estilo del título principal */
        h1 {
            font-size: 2.5rem;
            color: #2C3E50;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Párrafos de usuario */
        p {
            font-size: 1.2rem;
            color: #34495E;
            margin: 10px 0;
        }

        /* Subtítulo */
        h3 {
            font-size: 1.8rem;
            color: #34495E;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Estilo del formulario */
        form {
            margin-top: 20px;
        }

        label {
            font-size: 1.2rem;
            color: #34495E;
            margin-right: 10px;
            display: inline-block;
            margin-bottom: 10px;
            text-align: left;
            width: 100%;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 1.1rem;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: border 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #3498DB;
            outline: none;
        }

        /* Botón de registro */
        button {
            background-color: #3498DB;
            color: white;
            padding: 12px 30px;
            font-size: 1.2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
        }

        button:hover {
            background-color: #2980B9;
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }

        /* Animación de aparición */
        #contenedor_principal {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div id="contenedor_principal">
        <h1>Zapatería La Sangileña</h1>
        
        <!-- Escapar variables para mayor seguridad -->
        <p>Usuario: <?php echo ' '.htmlspecialchars($nombre_usuario); ?></p>
        <p>Correo: <?php echo ' '.htmlspecialchars($correo_usuario); ?></p>
        
        <h3>Registro de fabricante</h3>
        <div id="reg_fabricante">
            <form action="modelo/reg_fabricante.php" method="post">
                <label for="id_fab">Id:</label>
                <input type="text" name="id_fab" id="id_fab" placeholder="Id Fabricante" required>
                <br>
                <label for="nombre_fab">Nombre:</label>
                <input type="text" name="nombre_fab" id="nombre_fab" placeholder="Nombre Fabricante" required>
                <br>
                <button type="submit">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>