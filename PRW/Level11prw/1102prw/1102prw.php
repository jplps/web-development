<!DOCTYPE html>
<html lang="en">
	<!--
		Notas:
		Diretório geral em debian-based distros: /var/www/html;
		Endereço http://localhost/path/to/file.php para acessar a aplicação;
		Ex.: 1 - POO + SQL
	-->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PRW + SQL 2</title>

		<style>
			body{width:66.6%; color:#666; margin: auto;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:capitalize; text-align:center; position:sticky; top:0;}
			fieldset{margin-top:20px;}
			.align {display:inline-block; width:100px;}
			input{margin:5px;width:150px;}
			button, select{margin-top:10px;}
      table{margin:auto; border:1px solid #666; border-collapse:collapse;}
      caption{text-align:left; font-style:italic; margin-bottom:5px;}
      th{background:#999;}
      td{padding-left:10px;}
      td.centralize, p{text-align:center;}
      td, th{min-width:70px;border:1px solid #b1b1b1;}
		</style>
	</head>

	<body>
		<h1>php + sql 2</h1>

		<form name="form" action="" method="post">
			<fieldset>
				<legend>Project Control System</legend>


				<label class="align">title</label>
				<input type="varchar" name="title" />
				<br/>

				<label class="align">number of students</label>
				<input type="number" name="students_num" min="1" max="4" />
				<br/>

				<label class="align">date</label>
				<input type="date" name="datestamp" min="1" max="4" />
				<br/>

				<label class="align">select one</label>
				<select name="select" id="">
					<option value="0">web app</option>
					<option value="1">theoretic research</option>
				</select>
				<br/>

				<label for="">cooriented</label>
				<input type="radio" name="coop" value="0" id="" />
				<br/>
				<input type="radio" name="coop" value="1" id="" />
				<br/>

				<label for="">method</label>
				<br/>
				<input type="checkbox" name="method" value="plan" id="" />action plan
				<input type="checkbox" name="method" value="research" id="" />field research


				<button type="submit" name="registry">register</button>
				<button type="submit" name="other">Send yoUr daTA</button>
		</form>

    <?php
			require "conn-data.inc.php";
			require "connect.inc.php";
			require "create-db.inc.php";
			require "select-db.inc.php";
			require "define-charset.inc.php";
			require "create-table.inc.php";

			require "create-class.inc.php";

			require "disconnect.inc.php";

			$student = new Student();

			if(isset($_POST["send"])){
				$op = $_POST["operation"];
				if($op == "0"){
					$student->registerData($connection);
					$student->insert($connection, $table);
				}

				//Média:
				else if($op == "1"){
					$student->average($connection, $table);
				}

				else if($op == "2"){
					$quantity = $student->aboveAv($connection, $table);
					echo "<p>
						There are $quantity students Above the Average.
					</p>";
				}
			}
    ?>
	</body>
</html>