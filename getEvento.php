<?php

require 'config/database.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "SELECT id, nombre, descripcion, id_genero FROM evento WHERE id=$id LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$evento = [];

if ($rows > 0) {
    $evento = $resultado->fetch_array();
}

echo json_encode($evento, JSON_UNESCAPED_UNICODE);
