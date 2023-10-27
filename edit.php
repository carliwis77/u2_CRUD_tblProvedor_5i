<?php
include("./config.php");

// Compruebe si se ha hecho clic en el botón de editar o no
if (isset($_POST['editar_datos'])) {
    // recuperar datos del formulario
    $id_producto = $_POST['id_producto'];
    $otra_categoria = $_POST['otra_categoria'];
    $otra_nombre_compania = $_POST['otra_nombre_compania'];
    $otra_contacto = $_POST['otra_contacto'];
    $otra_region = $_POST['otra_region'];
    $otra_pais = $_POST['otra_pais'];
    $otra_codigo_postal = $_POST['otra_codigo_postal'];
    $otra_telefono = $_POST['otra_telefono'];


    // Consulta
    $query = "UPDATE provedor SET categoria='$otra_categoria', nombre_compania='$otra_nombre_compania', contacto='$otra_contacto', region='$otra_region', pais='$otra_pais', codigo_postal='$otra_codigo_postal', telefono='$otra_telefono' WHERE id_producto = '$id_producto'";
    $resultado = mysqli_query($conexion, $query);

    // ¿Comprueba si la consulta se guardó correctamente?
    if ($resultado)
        header('Location: ./index.php?actualizar=exito');
    else
        header('Location: ./index.php?actualizar=error');
} else
    die("Acceso prohibido...");
