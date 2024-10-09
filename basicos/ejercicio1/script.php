<?php 


class Ejercicio1 {

  public int $numero1;
  public int $numero2;
  public string $operador;

   public function __construct($numero1,$numero2,$operador){
      $this->numero1 = $numero1;
      $this->numero2 = $numero2;
      $this->operador = $operador;
   }
  public function buscarmayor(){

    if($this->numero2 > $this->numero1){

      $aux = $this->numero1;
      $this->numero1 = $this->numero2;
      $this->numero2 = $aux;

    }
  }

  public function operacion(){

    switch ($this->operador) {
      case '+':
        return $this->numero1 + $this->numero2;
        break;
      case '-': 
        return $this->numero1 - $this->numero2;
        break;
      case '*': 
        return $this->numero1 * $this->numero2;
        break;
      case '/': 
        return $this->numero1 / $this->numero2;
      
      default:
        break;
    }
  }
}



