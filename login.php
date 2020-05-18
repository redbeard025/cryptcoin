<?php
include 'cn.php';
session_start();

$username = $_POST ['username'];

$password = $_POST ['password'];

$_SESSION['username'] = $username;

//conexion db_cryptcoinusers//


$consulta="SELECT * FROM usuarios WHERE  username='$username' and password='$password'";


$resultado = mysqli_query($conexion, $consulta);

 
$filas = mysqli_num_rows($resultado);
if ($filas>0) {
    header("location:dashtreme-master\index.php");
} 
else {
    echo"Usuario no existe";

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>