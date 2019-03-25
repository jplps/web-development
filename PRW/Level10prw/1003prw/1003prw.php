<!DOCTYPE html>
<html lang="en">
	<!--
		Notas:
		Diretório geral em debian-based distros: /var/www/html;
		Endereço http://localhost/path/to/file.php para acessar a aplicação;
		Ex.: 1 - POO + PHP
	-->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PRW + POO 3</title>

		<style>
			body{width:66.6%; color:#666; margin: auto;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:capitalize; text-align:center; position:sticky; top:0;}
			p{margin-top:40px;}
		</style>
	</head>

	<body>
		<h1>php + poo 3</h1>

    <?php
      //Inclusão da classe:
      require_once "1003prw.inc.php";

			//Criação de objetos:
			$account1 = new Account(8500);
			$account2 = new Account(8500);

      //Utilização de métodos públicos:
			$account1->deposit(250);
			$account2->withdraw(5000);

      echo "<p>
        Balances:
				<br/><br/>
				
        CC-1: ",$account1->showme()," <br/>  CC-2: ",$account2->showme(),"
      </p>";
    ?>
	</body>
</html>