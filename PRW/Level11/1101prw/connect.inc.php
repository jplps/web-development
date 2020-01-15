<?php
  //Iniciando objeto 'conexão', com a classe mysqli (PHP):
  $connection = new mysqli($host, $user, $pass, $db) || exit($connection->error);
?>