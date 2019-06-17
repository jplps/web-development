<?php
  //Iniciando objeto 'conexão', com a classe mysqli (PHP):
  $conn = new mysqli($host, $user, $pass, $db) || exit($conn->error);
?>