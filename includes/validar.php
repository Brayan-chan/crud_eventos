<?php

require '../config/database.php';

if (isset($_POST['registrar'])) {
    if(strlen($_POST['nombre']) >=1 && strlen($_POST['correo'])  >=1 && strlen($_POST['telefono'])  >=1 
    && strlen($_POST['password'])  >=1 ){
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);
        $password = trim($_POST['password']);

        $consulta= "INSERT INTO user (nombre, correo, telefono, password)
        VALUES ('$nombre', '$correo','$telefono','$password' )";

        mysqli_query($conn, $consulta);
        mysqli_close($conn);

        header('Location: ../views/user.php');
    }
}

?>