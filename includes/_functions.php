<?php
   
require_once ("../config/database.php");

if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();
    
            break;

            case 'acceso_user';
            acceso_user();
            break;


		}

	}

    function editar_registro() {
		$conn=mysqli_connect("localhost","root","","eventos");
		extract($_POST);
		$consulta="UPDATE user SET nombre = '$nombre', correo = '$correo', telefono = '$telefono',
		password ='$password' WHERE id = '$id' ";

		mysqli_query($conn, $consulta);

		header('Location: ../views/user.php');
}

function eliminar_registro() {
    $conn=mysqli_connect("localhost","root","","eventos");
    extract($_POST);
    $id= $_POST['id'];
    $consulta= "DELETE FROM user WHERE id= $id";
    mysqli_query($conn, $consulta);
    header('Location: ../views/user.php');
}

function acceso_user() {
    $nombre=$_POST['nombre'];
    $password=$_POST['password'];
    session_start();
    $_SESSION['nombre']=$nombre;

    $conn=mysqli_connect("localhost","root","","eventos");
    $consulta= "SELECT * FROM user WHERE nombre='$nombre' AND password='$password'";
    $resultado=mysqli_query($conn, $consulta);
    $filas=mysqli_num_rows($resultado);

    if($filas){
        header('Location: ../views/user.php');
    }else{
        header('Location: login.php');
        session_destroy();
    } 
}