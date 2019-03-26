<?php
  //Criação de tabela (nome, tipo, chave):
  $sql = "CREATE TABLE IF NOT EXISTS $table (
    registry VARCHAR(20) PRIMARYKEY,
    uc VARCHAR(100),
    grade1 DECIMAL(3,1),
    grade2 DECIMAL(3,1)
  )";

  $result = $connection->query($sql) || exit($connection->error);
?>