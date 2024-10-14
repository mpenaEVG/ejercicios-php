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
    private function buscarmayor(){

      if($this->numero2 > $this->numero1){

        $aux = $this->numero1;
        $this->numero1 = $this->numero2;
        $this->numero2 = $aux;

      }
    }

    public function operacion(){
      
      $this->buscarmayor();

      switch ($this->operador) {
        case '+':
          return $this->numero1 + $this->numero2;
        case '-': 
          return $this->numero1 - $this->numero2;
        case '*': 
          return $this->numero1 * $this->numero2;
        case '/': 
          return $this->numero1 / $this->numero2;
        
        default:
          return "Operador no válido";
      }
    }
  }

  $numero1 = (int)$_GET['numero1'];
  $numero2 = (int)$_GET['numero2'];
  $operador = $_GET['operacion'];

  $objej1 = new Ejercicio1($numero1,$numero2,$operador);

  $resultado = $objej1->operacion();
    
  header("Location: ../vista/mostrar.php?resultado=$resultado");
        

