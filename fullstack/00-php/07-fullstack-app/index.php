<!DOCTYPE html>
<html lang="en">
	<!--
		Notas:
		Diretório geral em debian-based distros: /var/www/html;
		Endereço http://localhost/path/to/file.php para acessar a aplicação;
		PHP + POO + SQL
	-->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PHP + POO + SQL</title>

		<style>
			body{color:#666;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:uppercase; text-align:center; position:sticky; top:0;
			background-color: #6a6a; box-shadow:0px 2px 2px 1px rgba(0, 0, 0, 0.2);}
			fieldset{margin:auto; width:66.6%; margin-top:20px; text-transform:capitalize;}
			.align {display:inline-block; width:200px; margin:5px; text-align:right;}
			input{min-width:180px; margin-bottom:10px;}
			button{margin-top:10px; border:1px solid #6666; padding:5px 15px;}
      table{margin:auto; border:1px solid #666; border-collapse:collapse;}
      caption{text-align:left; font-style:italic; margin-bottom:5px;}
      th{background:#999;}
      td{padding-left:10px;}
      td.centralize, p{text-align:center;}
      td, th{min-width:70px;border:1px solid #b1b1b1;}
		</style>
	</head>

	<body>
		<h1>php with mysql db</h1>

		<form name="form" action="" method="post">
			<fieldset>
				<legend>information registry</legend>

				<label class="align">monthly paycheck</label>
				<input type="number" name="paycheck" min="0" step="0.01" />
				<br/>

				<label class="align">admission date</label>
				<input type="date" name="admission_date" />
				<br/>

				<button type="submit" name="send">process data</button>
		</form>

    <?php
			require "conn-data.inc.php";
			require "connect.inc.php";
			require "create-db.inc.php";
			require "select-db.inc.php";
			require "define-charset.inc.php";
			require "create-table.inc.php";
			require "create-class.inc.php";

			$staff = new Staff();

			if(isset($_POST["send"])){
				$staff->getFormData($conn);
				$staff->registerInDB($conn, $table);
				$staff->listStaff($conn, $table);
				$staff->countStaff($conn, $table);
			}

			require "disconnect.inc.php";
    ?>
	</body>
</html>