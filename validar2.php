<?php 
$correo=$_POST["correo"];
$contraseña=$_POST["pass"];

$email="nachoman@hotmail.com";
$pass="123456";

if ($correo==$email && $contraseña==$pass) {
    header("Location:arreglo.php");
}else{
    echo "<br><h1>Error al ingresar Correo y Contraseña</h1>";
}



?>