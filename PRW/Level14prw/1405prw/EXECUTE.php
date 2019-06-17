<?php
  //Inclusões:
  require "con-data.inc.php";
  require "connect.inc.php";
  require "create-db.inc.php";
  require "select-db.inc.php";
  require "define-charset.inc.php";
  require "create-table.inc.php";

  $sql = "INSERT  employees VALUE 
    (DEFAULT, 'Carlos Almeida', 5700),
    (DEFAULT, 'Pedro Cavalcanti', 12700),
    (DEFAULT, 'Luiz Aguiar', 8200),
    (DEFAULT, 'Marcelo Aviário', 3500),
  ";

  $result = $conn->query($sql) || exit($conn->error);

  

  require "disconnect.inc.php";
?>