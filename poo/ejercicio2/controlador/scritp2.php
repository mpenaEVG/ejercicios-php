<?php 

class Fecha{

  
  public array $fecha = [];
  public int $anio;
  public int $dia;
  public int $mes;

  private array $meses = [
    1 => ['nombre' => 'Enero', 'dias' => 31],
    2 => ['nombre' => 'Febrero', 'dias' => 28], 
    3 => ['nombre' => 'Marzo', 'dias' => 31],
    4 => ['nombre' => 'Abril', 'dias' => 30],
    5 => ['nombre' => 'Mayo', 'dias' => 31],
    6 => ['nombre' => 'Junio', 'dias' => 30],
    7 => ['nombre' => 'Julio', 'dias' => 31],
    8 => ['nombre' => 'Agosto', 'dias' => 31],
    9 => ['nombre' => 'Septiembre', 'dias' => 30],
    10 => ['nombre' => 'Octubre', 'dias' => 31],
    11 => ['nombre' => 'Noviembre', 'dias' => 30],
    12 => ['nombre' => 'Diciembre', 'dias' => 31]
  ];



  public function __construct($dia,$mes,$anio){
      
      
      $this->mes = $mes;
      $this->dia=$dia;
      $this->anio = $anio;
      //array con indice número de mes, y cada campo un array asociativo con dias y nombre de ese mes

      $this->fecha = array(
        $this->mes => array(
          'dias' =>  $this->meses[$this->mes]['dias'],
          'nombre' => $this->meses[$this->mes]['nombre']
        )
      );

      $this->esBisiesto();
  }


 public function esBisiesto(){
    if(($this->anio % 4 == 0 && $this->anio%100!==0) || $this->anio % 400 == 0){
      if($this->mes == 2){
        $this->fecha[$this->mes]['dias'] = 29;
      }
    }
  }

 public  function mostrarFecha(){

    return ''. $this->dia .' de '. $this->fecha[$this->mes]['nombre'] .' de '. $this->anio .' este mes tiene '. $this->fecha[$this->mes]['dias'] .' dias';
    
  }

  

}
