<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Sabritas</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Sabritas</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-md-4 text-white" href="#">Iniciar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- form tambah envio -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- tambah data -->
            <div class="card-body">
                <h3 class="card-title">Tabla provedor</h3>
                <p class="card-text">En esta tabla se almacenan todos los datos del provedor de las frituras</p>

                <!-- mostrar mensaje de éxito -->
                <?php if (isset($_GET['resultado'])) : ?>
                    <?php
                    if ($_GET['resultado'] == 'exito')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Proceso exitoso!</strong> Datos agregados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Oops!</strong> Error al agregar datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>

                <!-- Grupo de inputs -->

                <form class="row g-3" action="tambah.php" method="POST">

                    <div class="col-md-6">
                        <label for="NIM" class="form-label">Categoría</label>
                        <input type="text" name="categoria" class="form-control" placeholder="Categoría" required>
                    </div>

                    <div class="col-md-6">
                        <label for="NIM" class="form-label">Nombre_compañia</label>
                        <input type="text" name="nombre_compania" class="form-control" placeholder="Nombre_compañia" required>
                    </div>

                    <div class="col-md-6">
                        <label for="NIM" class="form-label">Contacto</label>
                        <input type="text" name="contacto" class="form-control" placeholder="Contacto" required>
                    </div>

                    <div class="col-md-6">
                        <label for="NIM" class="form-label">Región</label>
                        <input type="text" name="region" class="form-control" placeholder="Región" required>
                    </div>

                    <div class="col-md-6">
                        <label for="NIM" class="form-label">País</label>
                        <input type="text" name="pais" class="form-control" placeholder="País" required>
                    </div>

                    <div class="col-md-6">
                        <label for="Jurusan" class="form-label">Código postal</label>
                        <input type="text" name="codigo_postal" class="form-control" placeholder="Código_postal" required>
                    </div>

                    <div class="col-md-12">
                        <label for="Jurusan" class="form-label">Telefono</label>
                        <input type="text" name="telefono" class="form-control" placeholder="Telefono" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="daftar" name="registrar"><i class="fa fa-plus"></i><span class="ms-2">Registrar datos del provedor</span></button>
                    </div>
                </form>
            </div>
        </div>


        <!-- judul tabel -->
        <h5 class="mb-3">Historial de registros de envio</h5>

        <div class="row my-3">
            <div class="col-md-3 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Limite de entradas visibles</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Buscar..." aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- mostrar mensaje de eliminación exitosa -->
        <?php if (isset($_GET['eliminar'])) : ?>
            <?php
            if ($_GET['eliminar'] == 'exito')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Proceso exitoso!</strong> Datos eliminados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Oops!</strong> No se pudieron eliminar los datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- mostrar un mensaje de edición exitosa -->
        <?php if (isset($_GET['actualizar'])) : ?>
            <?php
            if ($_GET['actualizar'] == 'exito')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Proceso exitoso!</strong> Datos actualizados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Oops!</strong> Los datos no se pudieron actualizar!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>Id_producto</th>";
            echo "<th scope='col' class='text-center'>Categoría</th>";
            echo "<th scope='col' class='text-center'>Nombre_compañía</th>";
            echo "<th scope='col' class='text-center'>Contacto</th>";
            echo "<th scope='col' class='text-center'>Región</th>";
            echo "<th scope='col' class='text-center'>País</th>";
            echo "<th scope='col' class='text-center'>Código postal</th>";
            echo "<th scope='col' class='text-center'>Telefono</th>";
            echo "<th scope='col' class='text-center'>Opciones</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $limite = 10;
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $inicio_limite = ($pagina > 1) ? ($pagina * $limite) - $limite : 0;

            $anterior = $pagina - 1;
            $siguiente = $pagina + 1;

            $datos = mysqli_query($conexion, "SELECT * FROM provedor");
            $cantidad_de_datos = mysqli_num_rows($datos);
            $paginas_totales = ceil($cantidad_de_datos / $limite);

            $datos_mostrados = mysqli_query($conexion, "SELECT * FROM provedor LIMIT $inicio_limite, $limite");
            $id_producto = $inicio_limite + 1;

            // $sql = "SELECT * FROM envio";
            // $query = mysqli_query($conexion, $sql);




            while ($provedor = mysqli_fetch_array($datos_mostrados)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $provedor['id_producto'] . "</td>";
                echo "<td class='text-center'>" . $id_producto++ . "</td>";
                echo "<td class='text-center'>" . $provedor['categoria'] . "</td>";
                echo "<td class='text-center'>" . $provedor['nombre_compania'] . "</td>";
                echo "<td class='text-center'>" . $provedor['contacto'] . "</td>";
                echo "<td class='text-center'>" . $provedor['region'] . "</td>";
                echo "<td class='text-center'>" . $provedor['pais'] . "</td>";
                echo "<td class='text-center'>" . $provedor['codigo_postal'] . "</td>";
                echo "<td class='text-center'>" . $provedor['telefono'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // tombol hapus
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($cantidad_de_datos == 0) {
                echo "<p class='text-center'>No hay datos disponibles en esta tabla.</p>";
            } else {
                echo "<p>Total $cantidad_de_datos entradas</p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina > 1) ? "href='?pagina=$anterior'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $paginas_totales; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina < $paginas_totales) ? "href='?pagina=$siguiente'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal de editar datos -->
        <div class='modal fade' style="top:58px !important;" id='modal_para_editar' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Editar datos de envio</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $query = "SELECT * FROM provedor";
                    $resultado = mysqli_query($conexion, $query);
                    $provedor = mysqli_fetch_array($resultado);
                    ?>

<!-- ------------------------------------------------------------------------------------------------------------------ -->
                    
                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='id_producto' id='id_envio'>

                            <div class="col-12 mb-3">
                                <label for="edit_NIM" class="form-label">Categoría</label>
                                <input type="text" name="otra_categoria" id="edit_id_producto" class="form-control" placeholder="nom_empleado" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_NIM" class="form-label">Nombre_compañia</label>
                                <input type="text" name="otra_nombre_compania" id="edit_direccion_envio" class="form-control" placeholder="telefono" required>
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label for="edit_NIM" class="form-label">Contacto</label>
                                <input type="text" name="otra_contacto" id="edit_pais_envio" class="form-control" placeholder="precio" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_NIM" class="form-label">Región</label>
                                <input type="text" name="otra_region" id="edit_envio_coste" class="form-control" placeholder="cantidad" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_NIM" class="form-label">País</label>
                                <input type="text" name="otra_pais" id="edit_total" class="form-control" placeholder="nom_producto" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_NIM" class="form-label">Código_postal</label>
                                <input type="text" name="otra_codigo_postal" id="edit_paqueteria" class="form-control" placeholder="correo_cliente" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_ipk" class="form-label">Telefono</label>
                                <input type="text" name="otra_telefono" id="edit_nombre_cuenta" class=" form-control" placeholder="num_factura" required>
                            </div>

                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='editar_datos' class='btn btn-primary'>Editar</button>
                        </div>

                    </form>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='modal_para_borrar' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmación</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='hapus.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='id_provedor' id='id_para_borrar'>
                            <p>¿Estás seguro de que deseas eliminar estos datos?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='borrar_registro' class='btn btn-primary'>Eliminar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#modal_para_editar').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#id_envio').val(data[0]);
                // gak dipake, karena cuma increment number
                // $('#no').val(data[1]);
                $('#edit_id_producto').val(data[2]);
                $('#edit_direccion_envio').val(data[3]);
                $('#edit_pais_envio').val(data[4]);
                // jenis kelamin checked
                $('#edit_envio_coste').val(data[5]);
                $('#edit_total').val(data[6]);
                $('#edit_paqueteria').val(data[7]);
                $('#edit_nombre_cuenta').val(data[8]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#modal_para_borrar').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#id_para_borrar').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>