<!--
	Diretório geral em debian-based distros: /var/www/html;
	Endereço http://localhost/path/to/file.php para acessar a aplicação;

	Ex.: 7 - Formulários & PHP.
-->
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Ex.: 07</title>

	<style>
		body{text-align: center;}
		h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
		text-transform: capitalize;}
		fieldset{width: 40%; margin: auto;}
		input{width: 20%; align: left;}
		span{font-weight: bold; font-size: 150%;}
	</style>
</head>

<body>
	<h1>PHP form</h1>
	<br/><br/>

	<form id="form" action="06.php" method="get">
		<fieldset>
			<label for="">Total Buy $</label>
			<input type="number" name="buy" min="0" step="0.01"/>
			<br/><br/>

			<label for="">Comission %</label>
			<input type="number" name="com" min="0" step="0.01"/>
			<br/><br/>

			<button type="submit" form="form" value="submit">Submit to Result</button>
		</fieldset>

		<?php
			//Taxa de comissão:
			$com = $_GET["com"];

			//Total da compra:
			$buy = $_GET["buy"];

			//Cálculo da transformação:
			$final = $buy * ($com/100);

			//Arredondamento com number_format():
			$finaled = number_format($final, 2);

			//Imprimindo resultado na tela do navegador:
			echo "<p>
				<br/>
				Comission $com%
				<br/>
				Total $$finaled
			</p>";
		?>
	</form>
</body>
</html>