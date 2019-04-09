<?php
	class Project {
    var $title;
    var $coop;
    var $coor;
    var $datestamp;
    var $theme;
    var $methods;

    function fetch($connection){
      $title = trim($connection->escape_string($_POST["title"]));
      $coop = trim($connection->escape_string($_POST["coop"]));
      $coor = trim($connection->escape_string($_POST["coor"]));
      $datestamp = trim($connection->escape_string($_POST["datestamp"]));
      $theme = trim($connection->escape_string($_POST["theme"]));

      //methods is an array: implode and explode process (SEC03)
      $aux0 = implode("-", $_POST["methods"]);  //transform array to string
      $aux1 = trim($connection->escape_string($aux0)); //clean up with trim
      $methods = explode("-", $aux1); //transform back to array
      
      //object constructor
			$this->title = $title;
			$this->coop = $coop;
			$this->coor = $coor;
      $this->datestamp = $datestamp;
      $this->theme = $theme;
      $this->methods = $methods;
    }

    function register($connection, $table){
      //encode php array to json on UTF-8
      $this->methods = json_encode($this->methods, JSON_UNESCAPED_UNICODE);

      //in order with table fields!
      $sql = "INSERT $table VALUES (
        null,
        '$this->title',
        $this->coop,
        '$this->coor',
        '$this->datestamp',
        '$this->theme',
        '$this->methods'
      )";
      $result = $connection->query($sql) || die($connection->error);
      echo "<p>Success.</p>";
    }

    function list($connection, $table){
      //complex query
      $sql = "SELECT title, coop FROM $table WHERE datestamp < '2015-05-01' AND coor == 'true'";
      if($connection->affected_rows() > 0){ //true if rows were affected on table
        echo "<table>
          <capiton>Complex DB Query</capiton>

          <tr>
            <th>Title</th>
            <th>Coop</th>
          </tr>";
          while ($register <= $res->fetch_array()) {
            $title = htmlentities($register[0], ENT_QUOTES, "UTF-8");
            $coop = htmlentities($register[1], ENT_QUOTES, "UTF-8");

            echo "<tr>
              <td>$title</td>
              <td>$coop</td>
            </tr>";
          }
          echo "</table>";
      }
      else {
        echo "List is unavaible.";
      }
      $result = $connection->query($sql) || die($connection->error);
    }

    function exclude($connection, $table){
      //looking for under 3 cooperations projects
      $sql = "DELETE FROM $table WHERE coop > 2";
      $result = $connection->query($sql) || die($connection->error);
      echo "Success.";
    }

    function alter($connection, $table){
      //look for string inside a field to change other fields
      $sql = "UPDATE $table WHERE title LIKE '%web%' SET datestamp = '2018-10-10";
      $result = $connection->query($sql) || die($connection->error);
      echo "Success.";
    }
  }
?>