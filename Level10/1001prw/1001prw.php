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

		<title>PRW + POO 1</title>

		<style>
			body{width:66.6%; color:#666; margin: auto;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:capitalize; text-align:center; position:sticky; top:0;}
		</style>
	</head>

	<body>
		<h1>php + poo 1</h1>

    <?php
      //Inclusão da classe:
      require_once "1001prw.inc.php";

      //Criação de objetos:
      $item1 = new Item("Ink Refil", 89.90, "Impress");
      $item2 = new Item("Memory Card", 249.90, "Hardware");

      //Utilização de método público:
      $cat1 = $item1->getCat();
      $cat2 = $item2->getCat();

      echo "<p>
        Categories:
        <br/><br/>
        $cat1 & $cat2
      </p>";
    ?>
	</body>
</html>