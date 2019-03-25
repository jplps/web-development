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
      if($this->class <= 3)
        echo "Baixa Duração";
      else
        echo "Longa Duração";
    }

    function getName(){
      return $this->name;
    }
  }
?>