<?php
// Conectamos con la BD
require('settings.php');

//Asignamos a variables el nombre de usuario y la contraseña introducidas
$username = mysqli_real_escape_string($conexion, $_POST['inUser']);
$password = mysqli_real_escape_string($conexion, $_POST['inPass']);

//Creamos la consulta SQL para seleccionar los datos del usuario
$sql = "SELECT nombre_usuario FROM usuarios WHERE nombre_usuario = '$username' AND password = '$password'";
//Comprobamos si existe algún usuario con los datos introducidos en la BD
$result=$conexion->query($sql);
$rows = $result->num_rows;
  if ($rows > 0) {
    $row = $result->fetch_assoc();
    // Creamos variables de sesion para almacenar los datos del usuario
    $_SESSION['nom_usuario'] = $row['nombre_usuario'];
    header("location: panelDeControl.php");
  }else {
         //Si la Contraseña es incorrecta le damos la opcion al usuario de ir a una página para recuperar la contraseña o volver a loguearse
         echo "Nombre o contraseña incorrecto. <br>
         <a href='login.html'>Volver a Intentarlo</a>";
  }
?>
