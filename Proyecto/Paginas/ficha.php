<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ficha técica</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel=stylesheet href="../CSS/style.css" type="text/css">
  </head>
  <body>
    <h1>Prueba</h1>
    <div class="container-fluid">
      <div class="tabla col-lg-12 col-ms-12 col-sm-12 col-xs-12">
        <div class="rTableRow">
          Nombre del producto: <?php echo $consultaNombreProducto; ?>.
        </div>
        <div class="rTableRow">
          Descripcion: <?php echo $consultaDescripcionProducto; ?>.
        </div>
        <div class="rTableRow">
          Precio: <?php echo $consulaPrecioProducto; ?>.
        </div>
        <div class="rTableRow">
          <!-- Codigo QR -->
          <img src="<?php echo $consultaSrcImagen; ?>" alt="Imagen del producto <?php echo $consultaNombreProducto; ?>" width="500px" height="500px">
        </div>
          <?php
            if (!empty($URLVideo)) {
              echo "<div class='TableRow'>
              <a href='" + $URLVideo; + "' target='_blank'>Ver video sobre instruccioes de aplicado</a></div>";
            }
           ?>
           <div class="rTableRow">
             Categoria: <?php echo $consulaCategoriaProducto; ?>.
             <a href="#">Mas información acerca de la categoria.</a>
           </div>
           <div class="rTableRow">
             Proveedor: <?php echo $consulaProveedorProducto; ?>.
           </div>
      </div>
    </div>
  </body>
</html>
