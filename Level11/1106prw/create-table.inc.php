<?php
  $sql = "CREATE TABLE IF NOT EXISTS $table (
    id INT PRIMARYKEY AUTO_INCREMENT,
    paycheck FLOAT,
    admission_date DATE,
  )";
  $result = $conn->query($sql) || exit($connection->error);
?>