<?php
	class Project {
    var title;
    var coop;
    var coor;
    var datestamp;
    var theme;
    var methods;

    function getData($connection){
      $title = trim($connection->escape_string($_POST["title"]));
      $coop = trim($connection->escape_string($_POST["coop"]));
      $datestamp = trim($connection->escape_string($_POST["datestamp"]));
      $theme = trim($connection->escape_string($_POST["theme"]));
      $methods = trim($connection->escape_string($_POST["methods"]));
			
			$this->title = $title;
			$this->coop = $coop;
			$this->coor = $coor;
      $this->datestamp = $datestamp;
      $this->theme = $theme;
      $this->methods = $methods;
    }

    function insert($connection, $table){
      $sql = "INSERT $table VALUES (
        '$this->reg',
        '$this->uc',
        '$this->g0',
        '$this->g1'
      )";

      $result = $connection->query($sql) || exit($connection->error);
      echo "<p>Success.</p>";
    }

    function average($connection, $table){
      $sql = "SELECT registry, (grade1 + grade2)/2 AS average FROM $table ";
      $result = $connection->query($sql) || exit($connection->error);
      echo "<table>
        <caption>Average Generated</caption>
        <tr>
          <th>Registry</th>
          <th>Average</th>
        </tr>";
        while ($line = $result->fetch_array()) {  //Retorna false quando objeto não for atribuido;
          $r = htmlentities($line[0], ENT_QUOTES, "UTF-8");
          $a = htmlentities($line[1], ENT_QUOTES, "UTF-8");

          echo "<tr>
            <td>$r</td>
            <td>$a</td>
          </tr>";
        }
      echo "</table>";
    }

    function aboveAv($connection, $table){
      $sql = "SELECT COUNT(*) FROM $table WHERE (grade1 + grade2)/2 >= 6";  //Filtro de registro WHERE <teste lógico>;
      $result = $connection->query($sql) || exit ($connection->error);
      $line = $result->fetch_array();
      $quantity = htmlentities($line[0], ENT_QUOTES, "UTF-8");
      return $quantity;
    }
  }
?>