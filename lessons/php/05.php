<!--
	Diretório geral em debian-based distros: /var/www/html;
	Endereço http://localhost/path/to/file.php para acessar a aplicação;

	6 - Formulários & PHP: O método corresponde aos vetores $_POST e $_GET, 
	já existentes no PHP, utilizando os "name"s para ordená-los, e guardando 
	os dados fornecidos em cada input em seus respectivos endereços.
-->
<!DOCTYPE html>
<html lang="en-US">
		
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>php 6</title>
	
	<style>
		body{text-align: center;}
		h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
		text-transform: capitalize;}
		fieldset{width: 40%; margin: auto;}
		span{font-weight: bold; font-size: 150%;}
	</style>
</head>

<body>
	<h1>The PHP Form</h1>
	<br/><br/>

	<fieldset>
		<form id="firstForm" action="05.php" method="get">
			<label for="">Variable</label>
			<input type="number" name="num1">
			<br/>

			<label for="">1st Constant</label>
			<input type="number" name="num2">
			<br/>

			<label for="">2st Constant</label>
			<input type="number" name="num3">
		</form>
		<br/>

		<button type="submit" form="firstForm" value="submit">Submit</button>
	</fieldset>
	<br/>

	<?php
		// Criando variavel $x com o primeiro valor do formulario:
		$X = $_GET["num1"];
		
		// Recebendo e guardando outros dois valores e colocando em constantes:
		define("Y", $_GET["num2"]);
		define("Z", $_GET["num3"]);
		
		$xpression = (($X - 5) * Y) - Z;
		
		echo "<p>
			Variable X = $X <br>
			1st Constant Y = ", Y,"<br>
			2nd Constant Z = ", Z,"<br><br>
			
			<span>\$xpression = (( X - 5 ) * Y ) - Z</span>
			<br/><br/>
			
			\$xpression = $xpression
		</p>"
	?>
</body>

</html>