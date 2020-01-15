<?php
  //Criação de string com dados da tabela (nome, tipo, chave):
  $sql = "CREATE TABLE IF NOT EXISTS $table (
    id INT PRIMARYKEY AUTO_INCREMENT,
    nome VARCHAR(200),
    salario DECIMAL(10, 2) UNSIGNED
  )";

  //Evia consulta ou garante aviso de erro caso ocorra:
  $result = $conn->query($sql) || exit($conn->error);
?>