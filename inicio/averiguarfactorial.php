 <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nombres Alumnos</title>
  </head>
  <body>
      <h1>Averigua el factorial</h1>
      <p>
        <?php 
          
          require 'factorial.php';
          
          for ($i=0; $i < 11 ; $i++) {
          
              $numeros[$i] = $i; 
          }
            
            
          foreach ($numeros as $numero) {
              
              $factoriales[$numero] = factorial($numero);
          }

          foreach ($factoriales as $numero => $factorial) {
          
            
              echo '<h3>Factorial de <a href="solucion_factorial.php?factorial='. $factorial .'&numero='. $numero .'">'. $numero .'</a></h3>';
            
          }
          
        ?>
        
          
      </p>   
  </body>
</html>
