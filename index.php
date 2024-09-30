<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zapateria</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f7f7f7, #d7d7d7);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            font-size: 2.5em;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }

        #div_inicio_secion {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 30px 40px;
            width: 300px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #3498db;
        }

        label {
            font-weight: bold;
            color: #34495e;
            margin: 5px 0;
        }

        button {
            background: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
            transition: background 0.3s, transform 0.3s;
        }

        button:hover {
            background: #2980b9;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1>Zapateria la sangil</h1>
    <?php
    echo "";
    ?>
    <div id="div_inicio_sesion">
        <form  action="modelo/loguear.php" method="post">
            <input type="text" name="usuario" id="" placeholder = "Usuario" require>
            <br>
            <input type = "password" name="clave" id="" placeholder = "Contraseña" require>
            <br>
            <button type = "submit">Ingresar</button>
        </form> 
    </div>
</body>
</html>
