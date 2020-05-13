<?php
include 'cn.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$uniqid = uniqid();



printf("uniqid(): %s\r\n", uniqid());
echo $uniqid;

$insertar = "INSERT INTO usuarios(nombre, email, password, password2, uniqid) VALUES('$nombre', '$email', '$password', '$password2', '$uniqid')";

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo 'Registration Error';
} else {
    header("Location:login.html");
}
mysqli_close($conexion);
