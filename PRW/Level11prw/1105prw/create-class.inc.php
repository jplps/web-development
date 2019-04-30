<?php
	class User {
		var $id;
		var $mail;
		var $pass;

		//-----------------------------------------------------------

		function getFormData($conn){
			$mail = trim($conn->escape_string($_POST["mail"]));
			$this->mail = $mail;
			$pass = trim($conn->escape_string($_POST["pass"]));
			$this->pass = $pass;
		}

		//-----------------------------------------------------------

		// function registerData($conn, $table){
		// 	$sql ="INSERT $table VALUES(
		// 		'this->mail',
		// 		'this->pass',
		// 	)";
		// 	$result = $conn->query($sql) or die($conn->error);
		// }

		//-----------------------------------------------------------

		// function listProjects($conn, $table){
		// 	$sql = "SELECT projectid, preview FROM $table";
		// 	$result = $conn->query($sql) or die($conn->error);
		// 	if($conn->affected_rows > 0){
		// 		echo "<table>
		// 			<caption>Project Data Listing</caption>
		// 			<tr>
		// 				<th>Project ID</th>
		// 				<th>Value Preview</th>
		// 			</tr>";
		// 			while ($registry = $result->fetch_array()) {
		// 				$projectid = htmlentities($registry[0], ENT_QUOTES, "UTF-8");
		// 				$preview = htmlentities($registry[1], ENT_QUOTES, "UTF-8");
		// 				$formatedPreview = number_format($preview, 2, ",", ".");
		// 				echo "<tr>
		// 					<td>$projectid</td>
		// 					<td>$formatedPreview</td>
		// 				</tr>";
		// 			}
		// 		echo "</table>";
		// 	}
		// 	else
		// 		echo "<p>
		// 			Table may be empty.
		// 		</p>";
		// }

		//-----------------------------------------------------------

		// function countProjects($conn, $table){
		// 	$sql = "SELECT COUNT(*) FROM $table WHERE YEAR(datestamp) < '2015'";
		// 	$result = $conn->query($sql) or die($conn->error);
		// 	$registry = $result->fetch_array();
		// 	$quantity = htmlentities($registry[0], ENT_QUOTES, "UTF-8");
		// 	echo "<p>
		// 		We have $quantity project(s) in our database, previous to 2015.
		// 	</p>";
		// }
	}
?>