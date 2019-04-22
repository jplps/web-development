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

		function listProjects($conn, $table){
			$sql = "SELECT projectid, preview FROM $table";
			$result = $conn->query($sql) or die($conn->error);
			if($conn->affected_rows > 0){
				echo "<table>
					<caption>Project Data Listing</caption>
					<tr>
						<th>Project ID</th>
						<th>Value Preview</th>
					</tr>";
					while ($registry = $result->fetch_array()) {
						$projectid = htmlentities($registry[0], ENT_QUOTES, "UTF-8");
						$preview = htmlentities($registry[1], ENT_QUOTES, "UTF-8");
						$formatedPreview = number_format($preview, 2, ",", ".");
						echo "<tr>
							<td>$projectid</td>
							<td>$formatedPreview</td>
						</tr>";
					}
				echo "</table>";
			}
			else
				echo "<p>
					Table may be empty.
				</p>";
		}
	}
?>