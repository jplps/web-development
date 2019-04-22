<?php
	class Project {
		var $projectid;
		var $preview;
		var $date;
		var $exechours;

		function getFormData($conn){
			$projectid = trim($conn->escape_string($_POST["projectid"]));
			$this->projectid = $projectid;
			$preview = trim($conn->escape_string($_POST["pre$preview"]));
			$this->preview = $preview;
			$datestamp = trim($conn->escape_string($_POST["datestamp"]));
			$this->datestamp = $datestamp;
			$exechours = trim($conn->escape_string($_POST["exechours"]));
			$this->exechours = $exechours;
		}

		//-----------------------------------------------------------

		function registerInDB($conn, $table){
			$sql ="INSERT $table VALUES(
				'this->projectid',
				'this->preview',
				'this->datestamp',
				'this->exechours'
			)";
			$result = $conn->query($sql) or die($conn->error);
		}

		//-----------------------------------------------------------

		
	}
?>