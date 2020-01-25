<?php
  //Declaração de classe:
  class Curso {
    //Atributos:
    var $name;
    var $class;

    //Métodos:
    function __construct($n, $c){
      $this->name = $n;
      $this->class = $c;
    }

    function classify(){
      if($this->class < 2)
        echo "Curta Duração";
      else if($this->class <= 3)
        echo "Media Duração";
      else
        echo "Longa Duração";
    }

    function getName(){
      return $this->name;
    }
  }
?>