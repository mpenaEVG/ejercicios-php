<?php


  
  
    $nombre = $_GET["nombre"];
    $apellidos = $_GET["apellidos"];
    
    $sexo = $_GET["sexo"];
    $fecha_nac = $_GET["fecha_nacimiento"];

    if (isset($_GET["notificacion"])){
      $opcion = $_GET["notificacion"];

    }


    echo '<h1>Nombre: '. $nombre . '</h1><br><br>';
    echo '<h1>Apellido: '. $apellidos . '</h1><br><br>';
    
    echo '<h1>Sexo: '. $sexo . '</h1><br><br>';
    
    echo '<h1>Fecha nacimineto: '. $fecha_nac . '</h1><br><br>';
    echo '<h1>Has elegido la opción: '. $opcion .'</h1>';

?>