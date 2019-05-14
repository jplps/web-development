<?php
	class Staff {
		var $paycheck;
		var $admission_date;

		//-----------------------------------------------------------

		function getFormData($conn){
			$paycheck = trim($conn->escape_string($_POST["paycheck"]));
			$this->paycheck = $paycheck;
			$admission_date = trim($conn->escape_string($_POST["admission_date"]));
			$this->admission_date = $admission_date;
		}

		//-----------------------------------------------------------

		function registerInDB($conn, $table){
			$sql ="INSERT $table VALUES(
				null,
				'this->paycheck',
				'this->admission_date'
			)";
			$result = $conn->query($sql) or die($conn->error);
		}

		//-----------------------------------------------------------

		function listStaff($conn, $table){
			$sql = "SELECT paycheck, admission_date FROM $table";
			$result = $conn->query($sql) or die($conn->error);
			if($conn->affected_rows > 0){
				echo "<table>
					<caption>Staff Data</caption>
					<tr>
						<th>Paycheck</th>
						<th>Admission Date</th>
					</tr>";
					while ($registry = $result->fetch_array()) {
						$paycheck = htmlentities($registry[0], ENT_QUOTES, "UTF-8");
						$formated_admission_date = htmlentities($registry[1], ENT_QUOTES, "UTF-8");
						echo "<tr>
							<td>$paycheck</td>
							<td>$formated_admission_date</td>
						</tr>";
					}
				echo "</table>";
			}
			else
				echo "<p>
					Table may be empty.
				</p>";
		}

		//-----------------------------------------------------------

		function countStaff($conn, $table){
			$sql = "SELECT COUNT(*) FROM $table WHERE paycheck > 1000 AND DATE(admission_date) > '2019-01-01'";
			$result = $conn->query($sql) or die($conn->error);
			$registry = $result->fetch_array();
			$quantity = htmlentities($registry[0], ENT_QUOTES, "UTF-8");
			echo "<p>
				We have $quantity staff member(s) in our database, with paycheck
				greater than $1000,00 admmited after january 1st, 2019.
			</p>";
		}
	}
?>