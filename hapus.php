<?php
include("./config.php");

if (isset($_POST['borrar_registro'])) {
    // Agarrar el id del registro que se va a borrar
    $id_producto = $_POST['id_provedor'];

    // Consulta de borrado
    $query = "DELETE FROM provedor WHERE id_producto = '$id_producto'";
    $resultado = mysqli_query($conexion, $query);

    // ¿Se eliminó correctamente la consulta?
    if ($resultado) {
        header('Location: ./index.php?eliminar=exito');
    } else
        die('Location: ./index.php?eliminar=error');
} else
    die("acceso prohibido...");
