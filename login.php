<?php

session_start();
include 'cn.php';
$nombre = $_POST ['nombre'];
$password = $_POST ['password'];
$_SESSION['nombre'] = $nombre;

//conexion db_cryptcoinusers//

$consulta="SELECT * FROM usuarios WHERE nombre='$nombre' and password='$password'";

$resultado = mysqli_query($conexion, $consulta);
 
$filas = mysqli_num_rows($resultado);
if ($filas>0) {
    header("location:index-3.php");
} 
else {
    echo"Usuario no existe";

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>