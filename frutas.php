<?php 

  class Fruit {
    
      public $name;
      public $color;



      function set_name($name){
        $this->name = $name;
      }

      function get_name(){
          
        return $this->name;
      }
  }

  $apple = new Fruit();
  $banana = new Fruit();

  $apple->set_name('Manzana');
  $banana->set_name('Plátano');


  echo $apple->name;
  echo '<br></br>';
  echo $banana->get_name();

  echo '<br></br>';
  $apple->name = 'apple';
  echo $apple->name;

  var_dump($apple instanceof Fruit);


?>
