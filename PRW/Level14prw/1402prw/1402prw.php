<?php
  //Recebendo dados via PHP
  $name = $_GET["name"];
  $weight = $_GET["weight"];
  $height = $_GET["height"];

  //Calcular o IMC
  $imc = $weight / pow($height, 2);

  //Definir situação
  if($imc < 17)
    $situation = "Extreme Under Weight";
  elseif($imc < 18.5)
    $situation = "Under Weight";
  elseif($imc < 25)
    $situation = "Regular Weight";
  elseif($imc < 30)
    $situation = "Above Weight";
  elseif($imc < 35)
    $situation = "Obesity I";
  elseif($imc < 40)
    $situation = "Obesity II";
  else
    $situation = "Obesity III";

  //Formatar número
  $imc = number_format($imc, 1, ",", ".");
  
  //Tag <em> destaca com ênfase seu conteúdo em itálico
  echo "User <em>$name</em>:\n\tIMC: <em>$imc</em>\n\tSituation: <em>$situation</em>";
?>