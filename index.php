<?php
    require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="assets/css/es.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body id="page-top">

    <form action="includes/validar.php" method="POST">

        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-item-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12"><br><br>
                            <h3 class="text-center">Registrarse</h3>
                            <div class="form-group">
                                <label for="nombre" class="form-label" title="Ingresa tu nombre completo">Nombre: <span class="text-danger">*</span></label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Example John" required>
                            </div>
                            <div class="form-group">
                                <label for="username" class="form-label" title="Ingresa tu correo electrónico">Correo: <span class="text-danger">*</span></label>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="example@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="form-label" title="Ingresa tu número de teléfono">Telefono: <span class="text-danger">*</span></label>
                                <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="123-456-7890" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label" title="Ingresa tu contraseña">Contraseña: <span class="text-danger">*</span></label>
                                <input type="password" title="Ingresa tu contraseña" name="password" id="password" class="form-control" placeholder="***********" required>
                            </div><br>
                            <div class="mb-3">
                                <input type="submit" value="Guardar"class="btn btn-success" name="registrar">
                                <a href="#" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>