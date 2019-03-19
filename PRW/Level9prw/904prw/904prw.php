<!DOCTYPE html>
<html lang="en">
	<!--
		Notas:
		Diretório geral em debian-based distros: /var/www/html;
		Endereço http://localhost/path/to/file.php para acessar a aplicação;
		Ex.: 4 - Function & Include

		Existem dois tipos de utilização de bibliotecas externas, contendo as funções
		desejadas:

		include/					require/
		include_once			require_once

	-->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PRW 904</title>

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
		<h1>php function & include 4</h1>

		<form id="form" action="" method="post">
			<fieldset>
				<legend>Month Trick</legend>

				<label class="align">Select Something</label>
				<select name="month" id="">
          <?php
            foreach ($months as $month => $days) {
              echo "<option>$month</option>";
            }
          ?>
        </select>
			</fieldset>

			<fieldset>
				<legend>Operations</legend>

				<button type="submit" form="form" name="send">Send What</button>
			</fieldset>
		</form>

		<?php


			if(isset($_POST["send"])){

      }
		?>
	</body>
</html>