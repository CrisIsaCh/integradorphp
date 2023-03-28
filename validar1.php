<?php

$nombre=$_POST["nombre"];
$contraseña=$_POST["contraseña"];
$pin=$_POST["pin"];

$usuario="Admin";
$password="12345";
$pinNumerico="2121";

if ($usuario==$nombre && $contraseña==$password && $pin==$pinNumerico) {
    header("Location:bienvenido.php");
  }else{
      echo "<br><h1>Error al ingresar Ususario o Contraseña o Pin</h1>";
  }
  ?>