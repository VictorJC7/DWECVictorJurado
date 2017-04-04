<?php

require('settings.php');

$busqueda = $_GET['busqueda'];
//Contamos el número de palabras de la cadena para determinar el tipo de búsqueda
//Primero nos aseguramos de que la cadena no esté vacía.
if ($busqueda<>'') {
  //Contamos el numero de palabras
  $palabras = explode(" ",$busqueda);
  $numPalabras = count($palabras);
  if ($numPalabras==1) {
    //Si solo hay una palabra se busca mediante la instruccion Like
    $sqlSearch = "SELECT ** FROM ** WHERE ** LIKE '%busqueda%' LIMIT 50"; //hay que definir la consulta
  }
  // Si hay mas de una paabra se usa una busqueda avanzada con la istruccion MATCH AGAINST
  elseif ($numPalabras>1) {
    $sqlSearch = "SELECT ** MATCH () AGAINST ('%busqueda%') AS ** FROM ** WHERE MATCH () AGAINST ('%busqueda%') LIMIT 50"; //Falta definir la busqueda.
  }
//
header('Location: ficha.php');
$resultado = mysql("", $sqlSearch);
while ($row=mysql_fetch_object($resultado)) {
  //Redirecionamos a la pagina donde se muestra la ficha
  header('Location: ficha.php');
}
}else {
  echo "<script type='text/javascript'>alert('Error fatal');</script>";
  echo "<a href='../index.php'>Volver</a>";
}
?>
