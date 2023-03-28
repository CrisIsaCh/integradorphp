<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

  <?php include "cabezal.php"; ?>


  <main>
 <div align="center"><br>
 <h1>LOGIN FORMULARIO 1</h1>
<form name="formulario" method="post" action="validar1.php">
  <!-- Primer campo de entrada de datos -->
  Nombre de usuario:
  
  <input type="text" name="nombre" value="" /><br>


  Contraseña:
  <input type="password" name="contraseña" value=""><br> 

  Pin:
  <input type="number" name="pin" id=""><br>

  
  <!-- Botón de envío del formulario -->
  <input type="submit" value="Enviar" />
  <br>  
</form>

</main>



  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>