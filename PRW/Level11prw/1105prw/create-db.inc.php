<?php
  //Opcional: criação de db se ainda não existir:
  $sql = "CREATE DATABASE IF NOT EXISTS $db"; //Consulta de banco estruturado (query language);
  $result = $con->query($sql) || exit($conn->error); //Envio para db com método query (consulta);
?>