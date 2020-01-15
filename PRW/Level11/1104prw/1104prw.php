<!DOCTYPE html>
<html lang="en">
	<!--
		Notas:
		Diretório geral em debian-based distros: /var/www/html;
		Endereço http://localhost/path/to/file.php para acessar a aplicação;
		Ex.: 4 - POO + SQL
	-->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PRW + SQL 4</title>

		<style>
			body{width:66.6%; color:#666; margin: auto;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:uppercase; text-align:center; position:sticky; top:0;}
			fieldset{margin-top:20px; text-transform:capitalize;}
			.align {display:inline-block; width:200px; margin:5px;}
			input{max-width:120px;}
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
		<h1>project system</h1>

		<form name="form" action="" method="post">
			<fieldset>
				<legend>project control</legend>

				<label class="align">project id</label>
				<input type="varchar" name="projectid" autofocus />
				<br/>

				<label class="align">value</label>
				<input type="number" name="preview" min="0" step="0.01" />
				<br/>

				<label class="align">date</label>
				<input type="date" name="datestamp" />
				<br/>

				<label class="align">exec. hours</label>
				<input type="number" name="exechours" min="0" />
				<br/>

				<label class="align">select op.</label>
				<select name="operation" id="">
					<option value="0">registry</option>
					<option value="1">codes and values</option>
					<option value="2">project number</option>
					<option value="3">exclude project</option>
					<option value="4">hour av. and project number</option>
				</select>
				<br/>
				<br/>

				<button type="submit" name="send">Send yoUr daTA</button>
		</form>

    <?php
			require "conn-data.inc.php";
			require "connect.inc.php";
			require "create-db.inc.php";
			require "select-db.inc.php";
			require "define-charset.inc.php";
			require "create-table.inc.php";
			require "create-class.inc.php";

			$project = new Project();

			if(isset($_POST["send"])){
				$op = $_POST["operation"];
				if($op == "0"){
					$project->getFormData($conn);
					$project->registerInDB($conn, $table);
				}
				else if($op == "1")
					$project->listProjects($conn, $table);
				else if($op == "2")
					$project->countProjects($conn, $table);
				else if($op == "3")
					$project->excludeProjects($conn, $table);
				else if($op == "4")
					$project->averageCalc($conn, $table);
			}

			require "disconnect.inc.php";
    ?>
	</body>
</html>