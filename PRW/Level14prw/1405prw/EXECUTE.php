<?php
  //Inclusões:
  require "con-data.inc.php";
  require "connect.inc.php";
  require "create-db.inc.php";
  require "select-db.inc.php";
  require "define-charset.inc.php";
  require "create-table.inc.php";
  require "insert-employee.inc.php";

  //Selecionando todos os nomes na tabela funcionarios
  $sql = "SELECT nome FROM  funcionarios";
  $result = $conn->query($sql) || exit($conn->error);

  //Inserir os nome dos funcionarios no select
  while($line = $result->fetch_array()){
    //Evitar ataque XSS com htmlentities
    $employee = htmlentities($line[0], ENT_QUOTES, 'UTF-8');
    //Retorno com a tag de dentro do select
    echo "<option>$employee</option>"; 
  }

  require "disconnect.inc.php";
?>