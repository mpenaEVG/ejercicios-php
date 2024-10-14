<?php
      
      require 'scritp2.php';

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

      header("Location: mostrar.php?fecha=$fraseFecha");
