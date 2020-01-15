<?php
  function showClasses($ucsArray, $ucName){
    $classes = $ucsArray[$ucName];
    
    //Kill exec with msg:
    exit("<p>
      $ucName : $classes !
    </p>");
  }
?>