<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio1</title>
  </head>
  <body>

  <h1>Calculadora</h1>

  <form action="" method="GET">
    <label>Elige un numero</label>
    <input type=number name=numero1 min=1 max=100 required>
    </br>
    <label>Elige otro<label>
    <input type=number name=numero2 min=1 max=100 required>
    </br>
    <label>Elige una operacion</label>
    <select id=operacion name=operacion>
        <option value='+'>Suma</option>
        <option value='-'>Resta</option>
        <option value='*'>Multiplicacion</option>
        <option value='/'>Division</option>
    </select>
    </br>
    <input type=submit name=enviar>

  </form>

<?php 

        require_once 'script.php';

        $numero1 = (int)$_GET['numero1'];
        $numero2 = (int)$_GET['numero2'];
        $operador = $_GET['operacion'];

         

          $objej1 = new Ejercicio1($numero1,$numero2,$operador);

          $objej1->buscarmayor();
          $resultado = $objej1->operacion();
        
          echo '<h1>'. $resultado .'</h1>'; 

    ?>
  </body>
</html>
