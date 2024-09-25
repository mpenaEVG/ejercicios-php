<!DOCTYPE html>
<html>
  <head>
    <meta charset=UTF-8>
    <title>Ejercicio1</title>
  </head>
 
  <body>

    <form action="ejercicio1.php" method=POST>
      <input type=text name=alumno id=alumno><br/>
      <input type=number name=numero1 id=numero1 min=1 max=10 required>
      <input type=number name=numero2 id=numero2 min=11 max=20 required>
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
            
            for ($i=$numero1; $i <=$numero2; $i++) { 
              
              echo"<tr>";

                echo'<td>'. $i .'</td>';
              
             
              $resultado[$i] = factorial($i);
              echo '<td>'. $resultado[$i] .'</td>';

            }

            echo'<tr>
                    <td colspan=2>Alumno: '. $nombre .'</td>
                  </tr>';

        ?>
      
    </table>



  </body>
</html>
