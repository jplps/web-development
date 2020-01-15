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

		<title>PRW + POO 2</title>

		<style>
			body{width:66.6%; color:#666; margin: auto;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:capitalize; text-align:center; position:sticky; top:0;}
			p{margin-top:40px;}
		</style>
	</head>

	<body>
		<h1>php + poo 2</h1>

    <?php
      //Inclusão da classe:
      require_once "1002prw.inc.php";

      //Criação de objetos:
      $curso1 = new Curso("Informática", 3);
      $curso2 = new Curso("Desenvolvimento", 5);

      //Utilização de métodos públicos:
			$nome1 = $curso1->getName();
			$nome2 = $curso2->getName();

      echo "<p>
        Courses & Categories:
				<br/><br/>
				
        $nome1 / ",$curso1->classify()," & $nome2 / ",$curso2->classify(),"
      </p>";
    ?>
	</body>
</html>