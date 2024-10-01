<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require 'conexion.php';

    session_start();

    if(isset($_SESSION['correo']))
    {
        $id_fab = $_POST['id_fab'];
        $nombre_fab = $_POST['nombre_fab'];

        $query = "INSERT INTO fabricante(id_fabricante, nombre_fabricante) VALUES ('$id_fab', '$nombre_fab')";

        $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la insercion de los datos: ".mysqli_error($conexion));

        if($insercion)
        {
            echo '<script type="text/javascript">alert("Fabricante registrado");
                window.location.href=" ../registrar_fabricante.phop";
                </script>';
        }
        else
        {
            header('location: ../pagina_principal.php');
        }
    }
?>