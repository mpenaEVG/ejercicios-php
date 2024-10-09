 <?php 

class Ejemplo {
  
    public $dato;

   
    public function metodo1() {
        $this->dato = 14;
    }
    
}

  $ejemplo = new Ejemplo();
  $ejemplo->metodo1(); 
  echo $ejemplo->dato;
?>   
