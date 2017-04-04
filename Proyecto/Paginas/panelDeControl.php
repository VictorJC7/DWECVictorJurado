<?php
require 'settings.php';
require 'login.php';

if ($_SESSION["conectado"] == false) {
  echo "<script> alert('Debe iniciar sesión para acceder a esta página.');</script>";
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Panel de control</title>
  </head>
  <body>
    <h1>Panel de control</h1>
    <?php
      echo "Buenos días" . $_SESSION['nom_usuario'];
     ?>
     <div class="btn-group btn-group-justified" role="group" aria-label="...">
       <div class="btn-group" role="group">
         <button type="button" class="btn btn-default">Añadir un producto</button>
       </div>
       <div class="btn-group" role="group">
         <button type="button" class="btn btn-default">Modificar un producto</button>
       </div>
       <div class="btn-group" role="group">
         <button type="button" class="btn btn-default">Eliminar un producto</button>
       </div>
     </div>
  </body>
</html>
