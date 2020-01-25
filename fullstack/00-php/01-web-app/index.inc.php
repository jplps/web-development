<?php
  function doit() {
    if(isset($_POST["submit"])) {
      for($i=0; $i < 2; $i++) {
        $loc = "loc" . $i;

        if($i > 0) {
          $i = 2;
        }

        $t1 = "t" . $i;
        $t2 = "t" . ($i+1);
        
        $loc = $_POST[$loc];
        $t1 = $_POST[$t1];
        $t2 = $_POST[$t2];

        $av = ($t1 + $t2) / 2;
        
        $temps[$loc] = array($t1, $t2, $av);
      }

      showme($temps);
    }
  }

  function showme($temps) {
    echo "<p>";
      foreach ($temps as $loc => $intern) {
        echo "Location: ",$loc,"<br/>
        Average Temp.: ",$intern[2],"<br/>";
      }
    echo "</p>";
  }
?>