<?php
  $imcsRef = [
    "Abaixo do Peso" => 18.5,
    "Normal" => 25,
    "Sobrepeso" => 30,
    "Obesidade Grau 1" => 35,
    "Obesidade Grau 2" => 40,
    "Obesidade Grau 3" => 500
  ];
?>
<!DOCTYPE html>
<html lang="en">
	<!--
		Notas:
		Diretório geral em debian-based distros: /var/www/html;
		Endereço http://localhost/path/to/file.php para acessar a aplicação;
		Ex.: 5 - Function & Include
	-->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PRW 905</title>

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
		<h1>php function & include 5</h1>

		<form id="form" action="" method="post">
			<fieldset>
				<legend>IMC</legend>

				<label class="align">Input Weight (Kg):</label>
				<input type="number" name="weight" id="" />

        <br/>

				<label class="align">Input Height (m):</label>
				<input type="number" name="height" id="" step="0.01" />
			</fieldset>

			<fieldset>
				<legend>Operation</legend>

				<button type="submit" form="form" name="calculate">Calculate</button>
			</fieldset>
		</form>

		<?php
      include "905prw.inc.php";

			if(isset($_POST["calculate"])){
				//Receber valor do input:
        $h = $_POST["weight"];
        $w = $_POST["height"];

				//Chamar função atribuindo seu retorno:
        $r = calculateIMC($h, $w);
        
        //Chamar segunda função mostrando resultado:
        showResult($r);
			}
		?>
	</body>
</html>