<!--
	Diretório geral em debian-based distros: /var/www/html;
	Endereço http://localhost/path/to/file.php para acessar a aplicação;
	
	3 - POO + SQL
-->
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>php & sql 1</title>

		<style>
			body{width:66.6%; color:#666; margin: auto;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:capitalize; text-align:center; position:sticky; top:0;}
			fieldset{margin-top:20px;}
			.align {display:inline-block; width:100px;}
			input{margin:5px;width:150px;}
			button, select{margin-top:10px;}
      table{margin:auto; border:1px solid #666; border-collapse:collapse;}
      caption{text-align:left; font-style:italic; margin-bottom:5px;}
      th{background:#999;}
      td{padding-left:10px;}
      td.centralize, p{text-align:center;}
      td, th{min-width:70px;border:1px solid #b1b1b1;}
		</style>
	</head>

	<body>
		<h1>PHP & SQL</h1>

		<form name="form" action="" method="post">
			<fieldset>
				<label class="align">Registry</label>
				<input type="varchar" name="reg" />
				<br/>

				<label class="align">UC</label>
				<input type="varchar" name="uc" />
				<br/>

				<?php
					for ($i=0; $i < 2; $i++) { 
						echo "
							<label class='align'>Grade ",$i+1,"</label>
							<input type='number' name='g$i' step='0.01'/>
							<br/>
						";
					}
				?>

				<select name="operation" id="">
					<option value="0">Registry</option>
					<option value="1">Average</option>
					<option value="2">Best(s)</option>
				</select>
				<br/>

				<button type="send">Send Your DaTA</button>
		</form>

    <?php
      //Inclusões:
			require "conn-data.inc.php";
			require "connect.inc.php";
			require "create-db.inc.php";
			require "select-db.inc.php";
			require "define-charset.inc.php";
			require "create-table.inc.php";

			require "create-class.inc.php";

			//Criando um objeto:
			$student = new Student();

			if(isset($_POST["send"])){
				//Receber operação:
				$op = $_POST["operation"];

				//Cadastro:
				if($op == "0"){
					//Chama o método para registrar dados:
					$student->registerData($connection);

					//Insere os dados na tabela:
					$student->insert($connection, $table);
				}

				//Média:
				else if($op == "1"){
					//Chama o método que retorna a média:
					$student->average($connection, $table);
				}

				//Melhores Alunos:
				else if($op == "2"){
					$quantity = $student->aboveAv($connection, $table);

					echo "<p>
						There are $quantity students Above the Average.
					</p>";
				}

				require "disconnect.inc.php";
			}
    ?>
	</body>
</html>