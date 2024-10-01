<?php
require 'conexion.php';

session_start();

if (isset($_SESSION['correo'])) {
    // Obtener los datos del formulario
    $nombre_art = $_POST['nombre_art'];
    $precio_art = $_POST['precio_art'];
    $id_fabricante = $_POST['id_fabricante'];

    // Usar una consulta preparada para evitar inyecciones SQL
    $query = $conexion->prepare("INSERT INTO Articulo(nombre_articulo, precio_articulo, id_fabricante) VALUES (?, ?, ?)");
    $query->bind_param('sdi', $nombre_art, $precio_art, $id_fabricante);

    // Ejecutar la consulta
    if ($query->execute()) {
        echo '<script type="text/javascript">alert("Artículo registrado exitosamente"); window.location.href="../registrar_articulo.php";</script>';
    } else {
        echo '<script type="text/javascript">alert("Error al registrar el artículo"); window.location.href="../registrar_articulo.php";</script>';
    }

    // Cerrar la consulta y la conexión
    $query->close();
    $conexion->close();
} else {
    // Redirigir si no está autenticado
    header('location: ../pagina_principal.php');
}
?>
