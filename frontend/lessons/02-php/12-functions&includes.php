<!--
	Notas:
	Diretório geral em debian-based distros: /var/www/html;
	Endereço http://localhost/path/to/file.php para acessar a aplicação;
	
	13 - Function, Include & PHP.

	Existem dois tipos de utilização de bibliotecas externas, contendo as funções
	desejadas:

	include/					require/
	include_once			require_once
-->
<?php
  $months = [
    "Janeiro" => 31,
    "Fevereiro" => 28,
    "Março" => 31,
    "Abril" => 30,
    "Maio" => 31,
    "Junho" => 30,
    "Julho" => 31,
    "Agosto" => 31,
    "Setembro" => 30,
    "Outubro" => 31,
    "Novembro" => 30,
    "Dezembro" => 31
  ];
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>php 13</title>

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
		<h1>PHP functions & includes</h1>

		<form id="form" action="" method="post">
			<fieldset>
				<legend>Month Trick</legend>

				<label class="align">Select Month</label>
				<select name="month" id="">
          <?php
            foreach ($months as $month => $days) {
              echo "<option>$month</option>";
            }
          ?>
        </select>
			</fieldset>

			<fieldset>
				<legend>Operations</legend>

				<button type="submit" form="form" name="send">Send Data</button>
			</fieldset>
		</form>

		<?php
      require_once "903prw.inc.php";

			if(isset($_POST["send"])){
        $month = $_POST["month"];

        searchDayz($months, $month);
      }
		?>
	</body>
</html>