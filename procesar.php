<?php
include 'cn.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$insertar = "INSERT INTO usuarios(username, password, password2) VALUES('$username', '$password', '$password2')";

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo 'Registration Error';
} else {
    header("Location:dashtreme-master\login.html");
}
mysqli_close($conexion);
