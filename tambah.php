<?php
include("./config.php");

// Compruebe si se ha hecho clic en el botón de registro o no
if (isset($_POST['registrar'])) {
    // recuperar datos del formulario
    $categoria = $_POST['categoria'];
    $nombre_compañia = $_POST['nombre_compania'];
    $contacto = $_POST['contacto'];
    $region = $_POST['region'];
    $pais = $_POST['pais'];
    $codigo_postal = $_POST['codigo_postal'];
    $telefono = $_POST['telefono'];

    // Consulta
    $query = "INSERT INTO provedor(categoria, nombre_compania, contacto, region, pais, codigo_postal, telefono)
    VALUES('$categoria', '$nombre_compañia', '$contacto', '$region', '$pais', '$codigo_postal', '$telefono')";
    $resultado = mysqli_query($conexion, $query);

    // ¿Comprueba si la consulta se guardó correctamente?
    if ($resultado)
        header('Location: ./index.php?resultado=exito');
    else
        header('Location: ./index.php?resultado=error');
} else
    die("Akses dilarang...");
