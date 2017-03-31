<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Font awesome: -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel=stylesheet href="CSS/style.css" type="text/css">
    <!-- <script type="text/javascript" src="Scripts/comprobacionBuscador.js"></script> -->
    <!-- Latest compiled and minified CSS of Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Buscador</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container cabecera col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="logoCabecera col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <img src="http://fakeimg.pl/250x100/" alt="Logo de Omar">
        </div>
        <div class="separadorLogoLogin col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
        <div class="login col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <a href="Paginas/login.html">Iniciar sesión<i class="fa fa-sign-in" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="divFormulario col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form class="formulario" method="GET" action="paginas/buscador.php">
          <input type="text" name="busqueda" placeholder="Buscar..." id="cajatexto" maxlength="7">
          <input type="submit" name="BotonEnviar" value="Buscar" id="boton" onclick="comprobarBusqueda();"><br>
          <div class="checkBoxes">
            <span>Código <input type="checkbox" name="Codigo" value="Codigo"></span>
            <span>Nombre <input type="checkbox" name="nomProduct" value="nomProduct"></span>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
