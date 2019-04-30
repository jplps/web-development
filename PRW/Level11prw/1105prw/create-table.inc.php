<?php
  $sql = "CREATE TABLE IF NOT EXISTS $table (
    projectid VARCHAR PRIMARYKEY,
    preview DECIMAL(9, 2) UNSIGNED,
    datestamp DATE,
    exechours MEDIUMINT UNSIGNED
  )";
  $result = $conn->query($sql) || exit($connection->error);
?>