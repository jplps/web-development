<!DOCTYPE html>
<html lang="en">
	<!--
		Notas:
		Diretório geral em debian-based distros: /var/www/html;
		Endereço http://localhost/path/to/file.php para acessar a aplicação;
		Ex.: 1 - Function & Include
	-->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PRW 901</title>

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
		<h1>php function & include 1</h1>

		<form id="form" action="" method="post">
			<fieldset>
				<legend>Data Validation</legend>

				<label class="align">Input a Integer >= 0 :</label>
				<input type="text" name="value" id="" />
			</fieldset>

			<fieldset>
				<legend>Operations</legend>

				<button type="submit" form="form" name="process">Process</button>
			</fieldset>
		</form>

		<?php
			//Função para testar valor:
			function valTest($x){
				//Teste default do php para validação de inteiros:
				$test = filter_var($x, FILTER_VALIDATE_INT);

				/**
				 * Por ser uma linguagem fracamente tipada, o php pode resolver o inteiro 0 
				 * como falso. Desta maneira (===) garantimos através de um teste lógico
				 * que o valor estará correto.
				 */
				//Verificação de exatidão (boolean / boolean):
				if($test === false || $x < 0)
					return false;

				else
					return true;
			}

			if(isset($_POST["process"])){
				//Receber valor do input:
				$val = $_POST["value"];

				//Chamar função:
				$return = valTest($val);

				//Testar resultado da função para o escopo da resposta:
				if($return){
					$squareroot = sqrt($val);

					$squarerooted = number_format($squareroot, 2, ".", ",");

					echo "<p>
						The square root of $val is ~$squarerooted!
					</p>";
				}

				else
					echo "<p>
						This is not a nice value!
					</p>";
			}
		?>
	</body>
</html>