<!--
	Diretório geral em debian-based distros: /var/www/html;
	Endereço http://localhost/path/to/file.php para acessar a aplicação;

	3 - Página em php que utiliza constantes e variáveis de usuário, 
	utilizando echo para escrever o valor dessas criações na tela. 
-->
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>php 3</title>

	<style>
			body{text-align: center;}
			h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;}
	</style>
</head>

<body>
	<h1>PHP Elements</h1>

	<!-- Chamado do PHP -->
	<?php
		// Criação de Constantes (strings, números, booleans):
		define("id", "João");
		define("age", 31);
		define("car", false);

		// Criação de Variáveis:
		$currentBalance = 945682162.99;
		$income = 54317837.00;
		$finalBalance = $currentBalance + $income;

		
		// Saída para tela (nota-se o uso dentro e foras das aspas entre constantes e variáveis):
		echo
			// Se as aspas do comando "echo" forem simples, o php reproduzirá literalmente o nome das variáveis (então, o uso torna-se o mesmo das constantes).
			"<p>Checkout the info we have on you!!!<br><br><br>
				The Name: ",id,"<br>
				The Age: ",age,"<br>
				The Car: ",car,"<br><br>
				Your Current Balance: $$currentBalance <br>
				Your Latest Income: $$income <br>
				Your Current Balance: $$finalBalance <br>
			</p>";

		// O PHP é uma linguagem fracamente tipada, ou seja as variáveis aceitam diversos tipos de dados:
		$income = "LPS";
		echo "<br>...$income";
	?>
</body>

</html>