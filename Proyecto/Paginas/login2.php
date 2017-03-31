<?php

$host_db = "localhost"; //Host de la Base de Datos
$name_db = "pruebaDB"; //Nombre de la BD
$user_db = "root"; //Usuario de la Base de Datos
$pass_db = ""; //Pass del usuario de la bd
$tbl_db = ""; //Nombre de la tabla usuarios de la BD

$conexion = new mysqli($host_db, $user_db, $pass_db, $name_db); //Conectamos con la base de Datos


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $myUserName = mysqli_real_escape_string();
}


?>
