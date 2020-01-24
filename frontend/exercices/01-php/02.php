<!--
	Diretório geral em debian-based distros: /var/www/html;
	Endereço http://localhost/path/to/file.php para acessar a aplicação;

	Ex.: 3 - Formulários & PHP.
-->
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Ex.: 03</title>

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
	<h1>php form</h1>
	<br/><br/>

	<fieldset>
		<form id="form" action="02.php" method="post">
			<label for="">Sale's Total </label>
			<input type="number" name="salestotal" min="0"/>
		</form>

		<br/>

		<button type="submit" form="form" value="submit">Submit to Result</button>
	</fieldset>
</body>
</html>