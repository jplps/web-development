<!DOCTYPE html>
<html lang="en">
	<!--
		Notas:
		Diretório geral em debian-based distros: /var/www/html;
		Endereço http://localhost/path/to/file.php para acessar a aplicação;
		Ex.: 1 - Function & Include
	-->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PRW 901</title>

		<style>
			body{width:66.6%; color:#666; margin: auto;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:capitalize; text-align:center; position:sticky; top:0;}
			fieldset{margin-top:20px}
			button, input {margin:5px 0;}
			.align{display:inline-block;text-align:right;width:300px;}
			
		</style>
	</head>

	<body>
		<h1>php function & include 1</h1>

		<form id="form" action="" method="post">
			<fieldset>
				<legend>Data Validation</legend>

				<label for="">Input a Integer >= 0 :</label>
				<input type="text" name="value" id="" />
			</fieldset>

			<fieldset>
				<legend>Operations</legend>

				<button type="submit" form="form" name="process">Process</button>
			</fieldset>
		</form>

		<?php
			if(isset($_POST["process"])){
					
			}
		?>
	</body>
</html>