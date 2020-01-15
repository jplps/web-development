<?php
  $sql = "CREATE TABLE IF NOT EXISTS $table (
    id INT PRIMARYKEY AUTO_INCREMENT,
    title VARCHAR(200) NOT NULL,
    coop TINYINT UNSIGNED,
    coor BOOLEAN,
    datestamp DATE,
    theme VARCHAR(50),
    methods JSON
  )";

  $result = $connection->query($sql) || exit($connection->error);
?>