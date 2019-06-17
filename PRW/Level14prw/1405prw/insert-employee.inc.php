<?php
  $sql = "INSERT  employees VALUE 
    (DEFAULT, 'Carlos Almeida', 5700),
    (DEFAULT, 'Pedro Cavalcanti', 12700),
    (DEFAULT, 'Luiz Aguiar', 8200),
    (DEFAULT, 'Marcelo Aviário', 3500),
  ";
  $result = $conn->query($sql) || exit($conn->error);
?>