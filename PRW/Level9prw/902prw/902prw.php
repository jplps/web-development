<!DOCTYPE html>
<html lang="en">
	<!--
		Notas:
		Diretório geral em debian-based distros: /var/www/html;
		Endereço http://localhost/path/to/file.php para acessar a aplicação;
		Ex.: 2 - Function & Include

		Existem dois tipos de utilização de bibliotecas externas, contendo as funções
		desejadas:

		include/					require/
		include_once			require_once

	-->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PRW 902</title>

		<style>
			body{width:66.6%; color:#666; margin: auto;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:capitalize; text-align:center; position:sticky; top:0;}
			fieldset{margin-top:20px;}
			button{display:block;margin:5px auto;}
			input{margin:5px 0;}
			.align{display:inline-block;text-align:right;width:50%;}
			p{float:right;}
		</style>
	</head>

	<body>
		<h1>php function & include 2</h1>

		<form id="form" action="" method="post">
			<fieldset>
				<legend>Numeric Process</legend>

				<label class="align">First Integer:</label>
				<input type="number" name="first" id="" />

        <label class="align">Second Integer:</label>
				<input type="number" name="second" id="" />
			</fieldset>

			<fieldset>
				<legend>Operations</legend>

				<button type="submit" form="form" name="send">Send Your Data</button>
			</fieldset>
		</form>

		<?php
			//Incluir biblioteca de funções:
			include "902prw.inc.php";
		
			if(isset($_POST["send"])){
        $val0 = $_POST["first"];
        $val1 = $_POST["second"];

        //Invocação de funções externas:
        $sum = summing($val0, $val1);

        $cub = cubbing($sum);

        showThem($val0, $val1, $sum, $cub);
      }
		?>
	</body>
</html>