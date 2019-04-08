<?php
	class Project {
    var title;
    var coop;
    var coor;
    var datestamp;
    var theme;
    var methods;

    function fetch($connection){
      $title = trim($connection->escape_string($_POST["title"]));
      $coop = trim($connection->escape_string($_POST["coop"]));
      $coor = trim($connection->escape_string($_POST["coor"]));
      $datestamp = trim($connection->escape_string($_POST["datestamp"]));
      $theme = trim($connection->escape_string($_POST["theme"]));
      //methods is an array: implode and explode process (SEC03)
      $aux0 = implode("-", $_POST["methods"]);  //transform array to string
      $aux1 = trim($connection->escape_string($aux0); //clean up with trim
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
      //convert array to json
      $this->methods = json_encode($this->methods);
      //in order with table fields!
      $sql = "INSERT $table VALUES (
        null,
        '$this->title',
        $this->coop,
        '$this->coor',
        '$this->datestamp',
        '$this->theme',
        $this->methods
      )";
      $result = $connection->query($sql) || exit($connection->error);
      echo "<p>Success.</p>";
    }

    function list($connection, $table){
      $sql = "SELECT * FROM $table";
      $result = $connection->query($sql) || exit($connection->error);
    }
  }
?>