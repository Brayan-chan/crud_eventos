<?php

require '../config/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
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
                        <td id="bold"><?php echo $fila['nombre']; ?></td>
                        <td id="bold"><?php echo $fila['correo']; ?></td>
                        <td id="bold"><?php echo $fila['password']; ?></td>
                        <td id="bold"><?php echo $fila['telefono']; ?></td>
                        <td id="bold"><?php echo $fila['fecha']; ?></td>
                        <td id="acciones">
                            <a class="btn btn-warning" id="editar" href="../views/editar_user.php?id=<?php echo $fila['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-danger" id="eliminar" href="../views/eliminar_user.php?id='<?php echo $fila['id']; ?>"><i class="fa-solid fa-trash"></i></a>
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
    <script src="../assets/js/user.js"></script>
</body>
</html>