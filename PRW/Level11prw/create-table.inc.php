<?php
  //Criação de tabela (nome, tipo, chave):
  $sql = "CREATE TABLE IF NOT EXISTS $table (
    registry VARCHAR(20) PRIMARYKEY,
    uc VARCHAR(100),
    grade1 DECIMAL(3,1),
    grade2 DECIMAL(3,1)
  )";

  //Consulta para garantir aviso de erro caso ocorra::
  $result = $connection->query($sql) || exit($connection->error);
?>