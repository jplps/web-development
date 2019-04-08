<?php
	class Project {
    var title;
    var coop;
    var coor;
    var datestamp;
    var theme;
    var methods;

    function fetchData($connection){
      $title = trim($connection->escape_string($_POST["title"]));
      $coop = trim($connection->escape_string($_POST["coop"]));
      $datestamp = trim($connection->escape_string($_POST["datestamp"]));
      $theme = trim($connection->escape_string($_POST["theme"]));
      //methods is an array: implode and explode process (SEC03)
      $aux0 = implode("-", $_POST["methods"]);  //transform array to string
      $aux1 = trim($connection->escape_string($aux0); //clean up with trim
      $methods = explode("-", $aux1); //transform back to array
			
			$this->title = $title;
			$this->coop = $coop;
			$this->coor = $coor;
      $this->datestamp = $datestamp;
      $this->theme = $theme;
      $this->methods = $methods;
    }

    function registerData($connection, $table){
      //convert array to json
      $methods = json_encode($methods);
      
      //in order with table fields!!!!!!!
      $sql = "INSERT $table VALUES (
        null,
        '$this->title',
        $this->coop,
        $this->coor,
        '$this->datestamp'
        '$this->theme',
        $this->methods
      )";
      $result = $connection->query($sql) || exit($connection->error);
      echo "<p>Success.</p>";
    }
  }
?>