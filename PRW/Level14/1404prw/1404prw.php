<?php
  //Inclusões:
  require "con-data.inc.php";
  require "connect.inc.php";
  require "create-db.inc.php";
  require "select-db.inc.php";
  require "define-charset.inc.php";
  require "create-table.inc.php";

  require "create-class.inc.php";

  //Criando um objeto:
  $student = new Student();

  //Receber operação:
  $op = $_POST["operation"];

  //Cadastro:
  if($op == "0"){
    //Chama o método para registrar dados:
    $student->registerData($connection);

    //Insere os dados na tabela:
    $student->insert($connection, $table);
  }

  //Média:
  else if($op == "1"){
    //Chama o método que retorna a média:
    $student->average($connection, $table);
  }

  //Melhores Alunos:
  else if($op == "2"){
    $quantity = $student->aboveAv($connection, $table);

    echo "<p>
      There are $quantity students Above the Average.
    </p>";
  }

  require "disconnect.inc.php";
?>