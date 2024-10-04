<?php 

  $numero = $_GET['numero'];
  $espar = false;

  //método averigua si es par o no, almacena ese dato por referencia y devuelve el cuadrado del número

  function cuadradoParImpar($numero, &$espar){

      if ($numero % 2 == 0) {
        $espar = true;
      }else{
        $espar = false;
      }
   return $numero * $numero;
  }

  $objetivo[$numero] = cuadradoParImpar($numero,$espar);

  if ($espar) {
    header('Location:espar.php?objetivo='. $objetivo[$numero] .'&numero='. $numero .'');
  }else{

    header('Location:esimpar.php?objetivo='. $objetivo[$numero] .'&numero='. $numero .'');
  }



?>
