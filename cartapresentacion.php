<?php
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];
$numerod=$_POST["numero"];
?>

<div align="center"><br>
<h1>CARTA PRESENTACION</h1>

<h2>Mi Nombre es: <?php echo $nombre." ".$apellido ?></h2>

<h2>Direccion: <?php echo $direccion."    n°:".$numerod ?></h2>

<h2>Telefono: <?php echo $telefono?></h2>

</div>