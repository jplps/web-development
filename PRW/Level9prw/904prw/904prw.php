<?php
  $ucs = [
    "PObjetos" => 4,
    "PWeb" => 8,
    "Design" => 8,
    "Projetos" => 2,
    "BDados" => 4
  ];
?>
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
			.align{display:inline-block;width:50%;}
			p{float:right;}
		</style>
	</head>

	<body>
		<h1>php function & include 4</h1>

		<form id="form" action="" method="post">
			<fieldset>
				<legend>Consult Trick</legend>

				<label class="align">Select UC</label>

				<br/>
				
				<?php
					foreach ($ucs as $uc => $num_classes) {
						echo "<input type=\"radio\" name=\"uc\" value=\"$uc\" >
							$uc
						</input> <br/>";
					}
				?>
			</fieldset>

			<fieldset>
				<legend>Operations</legend>

				<button type="submit" form="form" name="send">Show Classes</button>
			</fieldset>
		</form>

		<?php
			include_once "904prw.inc.php";

			if(isset($_POST["send"])){
				//Validação de input (sem select selectado):
				if(isset($_POST["uc"])){
				$uc = $_POST["uc"];

				showClasses($ucs, $uc);
				}

				else
					echo "<p>
						Select something and press it again!
					</p>";
      }
		?>
	</body>
</html>