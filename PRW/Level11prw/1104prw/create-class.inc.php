<?php
	class Project {
		var $projectid;
		var $preview;
		var $date;
		var $exechours;

		function getData($conn){
			$projectid = trim($conn->escape_string($_POST["projectid"]));
			$preview = trim($conn->escape_string($_POST["pre$preview"]));
			$date = trim($conn->escape_string($_POST["date"]));
			$exechours = trim($conn->escape_string($_POST["exechours"]));
		}
	}
?>