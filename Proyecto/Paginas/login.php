<?php
$host_db = "localhost"; //Host de la Base de Datos
$name_db = "pruebaDB"; //Nombre de la BD
$user_db = "root"; //Usuario de la Base de Datos
$pass_db = ""; //Pass del usuario de la bd
$tbl_db = ""; //Nombre de la tabla usuarios de la BD

$conexion = new mysqli($host_db, $user_db, $pass_db, $name_db); //Conectamos con la base de Datos

//Comprobamos la conexion con la BD
if ($conexion->connect_error) {
  die("No se pudo conectar con la Base de Datos, vuelva a intentarlo en unos minutos
  y si el problema persiste contacte con el administrador." . $conexion->connect_error);
}
 //Asignamos a variables el nombre de usuario y la contraseña introducidas
 $username = $_POST['inUser'];
 $password = $_POST['inPass'];

 //Creamos la consulta SQL para seleccionar los datos del usuario
 $sql = "SELECT nombre FROM usuarios WHERE nombre = '$username'";

//Comprobamos si existe algún usuario con los datos introducidos en la BD
$resul = $conexion->query(sql);
  if ($resul->num_rows < 0) {
    echo "El usuario no existe.";
  }
  else {
    //Comprobamos la contraseña
    $row = $result->fetch_array(MYSQLI_ASSOC);
// if (password_verify($password, $row['password']) {
    if (password_verify($password, $row['pass']) {
      //Iniciamos la sesión
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      //Iniciamos un contador de sesion.
      $_SESSION['start'] = time();
      $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

      // echo "Bienvenido " .$_SESSION['username'];
      echo "<h1>Bienvenido " .$username ."!</h1>";
      //Damos acceso al panel de control:
      echo "<br><br><a href=panel-control.php>Panel de Control</a>";
    }
    else {
      //Si la Contraseña es incorrecta le damos la opcion al usuario de ir a una página para recuperar la contraseña o volver a loguearse
      echo "Contraseña incorrecta. <br>
      <a href='login.html'>Volver a Intentarlo</a><br>
      <a href=recuperarPass.php>¿Has olvidad la contraseña?</a> ";
    }
  }
mysqli_close($conexion);
?>
