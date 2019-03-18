<?php
  //Função soma:
  function summing($x, $y){
    $sum = $x + $y;
    return $sum;
  }

  //Função cubo:
  function cubbing($z){
    $cub = pow($z, 3);
    return $cub;
  }

  //Função show:
  function showThem($x, $y, $z){
    echo "<p>
      Results: <br/>
      Integer 0: $x <br/>
      Integer 1: $y <br/>
      Sum: $sum <br/>
      Cube: $cub <br/>
    </p>"
  }
?>