<!DOCTYPE html>
<html>
  <head>
    <meta charset=UTF-8>
    <title>Ejercicio1</title>
  </head>
 
  <body>

<?php 

    $RUTA = "img/";

    $flores=array(
      'rosa'=>"rosa.jpg",
      'margarita'=>"margarita.jpg"
    );


    foreach ($flores as $nombre => $src) {
      echo '<img src="'. $RUTA . $src .'">';
      echo '<p>Esto es una '. $nombre .'</p>'; 
      # code...
    }

 
 
    ?>

  </body>
</html>
