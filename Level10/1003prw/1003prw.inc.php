<?php
  //Declaração de classe:
  class Account {
    //Atributo:
    var $balance;

    //Métodos:
    function __construct($v){
      $this->balance = $v;
    }

    function deposit($v){
      $this->balance += $v;
    }

    function withdraw($v){
      if($this->balance <= 0)
        echo "You can't withdraw.";
      else
        $this->balance -= $v;
    }

    function showme(){
      return $this->balance;
    }
  }
?>