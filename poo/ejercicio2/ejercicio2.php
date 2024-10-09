 <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio1</title>
  </head>
  <body>

  <h1>Dias Meses y Años</h1>

  <form action="" method="GET">
    <label>Elige la fecha</label>
    <input type=date name=fecha required>
    </br> 
    <input type=submit name=enviar value=enviar>
   </form>

    <?php 
      
      require_once 'scritp2.php';

      $fecha = $_GET['fecha'];


      //He hecho una funcion "Casera" ya que podría usar una funcion predefinida de php para esto 

      function splitCasero($fecha){
         $longitud = strlen($fecha);
          $aux = "";
         $elementos = [];

          for($i = 0; $i<$longitud;$i++){

            if($fecha[$i] != '' && $fecha[$i] != '-'){
              $aux .= $fecha[$i];   //concatenar caracteres
            }else{
              $elementos[] = $aux;
              $aux = "";
            }
          }

         $elementos[] = $aux;

         return $elementos;

      }
    
      $elementos = splitCasero($fecha);

      $anio= (int)$elementos[0];
      $mes = (int)$elementos[1];
      $dia = (int)$elementos[2];

      $obj = new Fecha($dia,$mes,$anio);
      
      $obj->esBisiesto();
      
      $fraseFecha =  $obj->mostrarFecha();

      echo '<h1>'. $fraseFecha .'</h1>';

        
    ?>


</body>
</html>
