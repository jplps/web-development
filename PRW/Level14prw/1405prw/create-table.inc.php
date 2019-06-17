<?php
  //Criação de string com dados da tabela (nome, tipo, chave):
  $sql = "CREATE TABLE IF NOT EXISTS $table (
    registry VARCHAR(20) PRIMARYKEY,
    uc VARCHAR(100),
    grade1 DECIMAL(3,1),
    grade2 DECIMAL(3,1)
  )";

  //Evia consulta ou garante aviso de erro caso ocorra:
  $result = $conn->query($sql) || exit($conn->error);
?>