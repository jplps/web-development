<?php
  //Recebendo nome do funcionario via ajax
  $func = $conn->escape_string($_GET["employee"]);
  //Construindo a consulta ao db
  $sql = "SELECT salario FROM funcionarios WHERE nome='$func'";
  $result = $conn->query($sql) || exit($conn->error);
  $reg = $result->fetch_array();
  $paycheck = htmlentities($reg[0], ENT_QUOTES, "UTF-8");
  echo "<p>Employee: $func <br />Paycheck: $$paycheck</p>";
?>