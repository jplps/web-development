<?php
  //Opcional: criação de db se ainda não existir:
  $sql = "CREATE DATABASE IF NOT EXISTS $db"; //Consulta de banco estruturado (query language);
  $result = $connection->query($sql) || exit($connection->error); //Envio para db com método query (consulta);
?>