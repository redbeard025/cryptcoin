<?php
include 'cn.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$insertar = "INSERT INTO usuarios(nombre, email, password, password2) VALUES('$nombre', '$email', '$password', '$password2')";

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo 'Registration Error';
} else {
    header("Location:login.html");
}
mysqli_close($conexion);
