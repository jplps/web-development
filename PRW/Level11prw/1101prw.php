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

		<title>PRW + SQL 1</title>

		<style>
			body{width:66.6%; color:#666; margin: auto;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:capitalize; text-align:center; position:sticky; top:0;}
			p{margin-top:40px;}
		</style>
	</head>

	<body>
		<h1>php + sql 1</h1>

		<form name="form" action="" method="post">
			<fieldset>
				<label for="">Student</label>
				<input type="varchar" />

				<label for="">Register</label>
				<input type="number" />

				<label for="">Grade 1</label>
				<input type="number" />
			</fieldset>
		</form>

    <?php
      //Inclusão da classe:
      require_once "1101prw.inc.php";
    ?>
	</body>
</html>