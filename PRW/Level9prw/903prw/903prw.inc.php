<?php
  function searchDayz($monthsarray, $monthname){
    $num_dayz = $monthsarray[$monthname];

    echo "<p>
      The chosen one was $monthname with $num_dayz dayZ!
    </p>";
  }
?>