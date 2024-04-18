<?php
    require '../config/database.php';
    $id = $_GET['id'];
    $consulta = "SELECT * FROM user WHERE id = $id";
    $resultado = mysqli_query($conn, $consulta);
    $usuario = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditarUsuario</title>
    <link rel="stylesheet" href="../assets/css/es.css">
    <link rel="stylesheet" href="../assets//css/styles.css">
</head>
<body id="page-top">

<form action="../includes/_functions.php" method="POST">
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12"><br><br>
                        <h3 class="text-center">Editar usuario</h3>
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre: <span class="text-danger">*</span></label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" value="<?php echo $usuario['nombre'];?>"required>
                        </div>
                        <div class="form-group">
                            <label for="username">Correo: <span class="text-danger">*</span></label>
                            <input type="email" name="correo" id="correo" class="form-control" placeholder="" value="<?php echo $usuario['correo'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="form-label">Telefono: <span class="text-danger">*</span></label>
                            <input type="tel"  id="telefono" name="telefono" class="form-control" value="<?php echo $usuario['telefono'];?>" required>                            
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña: <span class="text-danger">*</span></label>
                            <input type="password" name="password" id="password" class="form-control" value="<?php echo $usuario['password'];?>" required>
                            <input type="hidden" name="accion" value="editar_registro">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Editar</button>
                            <a href="../views/user.php" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    
</body>
</html>