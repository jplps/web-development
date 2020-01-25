<?php
  $sql = "CREATE TABLE IF NOT EXISTS $table (
    id VARCHAR PRIMARYKEY,
    mail STRING,
    pass STRING,
  )";
  $result = $conn->query($sql) || exit($connection->error);
?>