<!DOCTYPE html>
<html lang="es">
  <head> 
    <meta charset="utf-8">
    <title>Par</title>
    <link rel="stylesheet" href="css/par.css">
  </head>
  <body> 
      <?php 

       $cuadrado = $_GET['objetivo'];
       $numero = $_GET['numero'];

       echo '<h1>El número '. $numero .' cuyo cuadrado es '. $cuadrado .', es par</h1>';

      ?>
  </body>


</html>
