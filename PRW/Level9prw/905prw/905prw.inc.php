<?php
  //Cálculo de IMC
  function calculateIMC($h, $w){
    $imc = ($w / pow(2, $h));
    return $imc;
  }

  //Amostra de resultado:
  function showResult($r){
    foreach ($imcsRef as $ref => $value) {
      if ($r <= $value)
        echo "<p>
          The person with BMI $r is $ref.
        </p>";
    }
  }
?>