<!DOCTYPE html>
<html>
  <head>
    <meta charset=UTF-8>
    <title>Ejercicio1</title>
  </head>
 
  <body>

    <form action="arrays.php" method=POST>
      <input type=text name=alumno id=alumno><br/>
      <input type=number name=numero1 id=numero1 min=1 max=10 required>
      <input type=number name=numero2 id=numero2 min=11 max=50 required>
      <input type=submit value=enviar>
    </form>
     <table border=1> 
    <?php 

          $numero1 = $_POST['numero1'];
          $numero2 = $_POST['numero2'];
          $nombre = $_POST['alumno'];

            echo'<tr>
                  <th colspan=2>TABLA FACTORIALES DEL '. $numero1 .' AL '. $numero2 .'</td>
              </tr>
              <tr>
                <td>NÚMERO</td>
                <td>FACTORIAL</td>
             </tr>';

          include 'factorial.php';

          $resultado = [];
            
            for ($i=$numero1; $i <=$numero2; $i++) { 
              
              echo"<tr>";

                echo'<td>'. $i .'</td>';
              
             
              $resultado[$i] = factorial($i);
              echo '<td>'. $resultado[$i] .'</td>';
              echo"</tr>";

            }

            echo'<tr>
                    <td colspan=2>Alumno: '. $nombre .'</td>
                  </tr>';
            
          echo '<tr><td colspan="2">VAR DUMP<br/>';
          var_dump($resultado);
          echo '</td></tr>'; 

          echo '<tr><td colspan="2"> PRINT_R<br/>';
          print_r($resultado);
          echo '</td></tr>'; 

          echo '<tr><td> COUNT<br/>';
          echo count($resultado);
          echo '</td></tr>'; 
          

          echo '<tr><td colspan=2>Array sin ordenar<br/>';
          $cars = array('BMW','Volvo','Toyota');
          print_r($cars);
          echo '<br/>Array ordenado ascendente<br/>';
          rsort($cars);
          print_r($cars);
          echo '<br/>Array ordenado descendente<br/>';
          sort($cars);
          print_r($cars);
          echo '</td></tr>'; 



          $carros = array('coche'=>'BMW',
              'motor'=>'320d',
              'tipo'=>'Diesel');
           

          echo '<tr><td> FOREACH<br/>';
          foreach ($carros as $key => $value) {
            echo '<br/>'. $key .': '. $value .'<br/>';
          }  
          echo '</td></tr>';


          echo '<tr><td> FOREACH de $_POST<br/>';
          foreach ($_POST as $key => $value) {
            echo '<br/>'. $key .': '. $value .'<br/>';
          }  
          echo '</td></tr>';
      ?>
      
    </table>

 



  </body>
</html>
