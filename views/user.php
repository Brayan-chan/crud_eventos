<?php

session_start();
require '../config/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../assets/css/es.css">
    <link rel="stylesheet" href="../assets/css/navegador.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../eventos.php"><i class="fa-solid fa-calendar-days"></i> Eventos</a></li>
        </ul>
    </nav>
    <div class="container is-fluid"><br>
        <div class="col-xs-12">
            <h2>Lista de usuarios</h2><br>
            <div>
                <a class="btn btn-success" href="../index.php">Nuevo usuario</a>
            </div><br><br>
        </div>
        <table class="table table-striped table-dark" id="table_id">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Password</th>
                    <th>Telefono</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php
                $SQL = "SELECT *FROM user ";
                $dato = mysqli_query($conn, $SQL);

                if ($dato->num_rows > 0) {
                    while ($fila = mysqli_fetch_array($dato)) {
                ?>
                    <tr>
                        <td><?php echo $fila['nombre']; ?></td>
                        <td><?php echo $fila['correo']; ?></td>
                        <td><?php echo $fila['password']; ?></td>
                        <td><?php echo $fila['telefono']; ?></td>
                        <td><?php echo $fila['fecha']; ?></td>
                        <td>
                            <a class="btn btn-warning" href="editar_user.php?id=<?php echo $fila['id']; ?>">Editar</a>
                            <a class="btn btn-danger" href="#?id='<?php echo $fila['id']; ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php
                    }
                } else {
                    ?>
                    <tr class="text-center">
                        <td colspan="16">No hay registros para mostrar</td></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="../js/user.js"></script>
</body>
</html>