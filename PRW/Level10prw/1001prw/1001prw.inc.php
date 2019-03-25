<?php
  //Declaração de classe:
  class Item {
    var $id;
    var $price;
    var $cat;

    function __construct($i, $p, $c){
      $this->id = $i;
      $this->price = $p;
      $this->cat = $c;
    }

    function getCat(){
      return $this->cat;
    }
  }
?>