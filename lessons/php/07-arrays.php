<!--
	Diretório geral em debian-based distros: /var/www/html;
	Endereço http://localhost/path/to/file.php para acessar a aplicação;
	
	8 - Arrays & PHP
-->
<?php
	// Criando array para armazenar dados:
	$capitals = [
		"Florianópolis" => 477000,
		"São Paulo" => 12100000,
		"João Pessoa" => 720950,
		"Salvador" => 2670000,
		"Porto Alegre" => 1480000
	];

	// Referência:
	// echo "<pre>";
	// print_r($capitals);
	// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>php 8</title>

	<style>
		body{color: #666;}
		h1{width: 60%; border-bottom: 2px solid #666; margin: auto; padding: 10px;
		text-transform: capitalize; text-align: center;}
		fieldset{width: 55%; margin: 0 auto 40px;}
		span{font-weight: bold; font-size: 150%;}
		table{width: 50%; margin: auto; border: 1px solid #666; border-collapse: collapse;}
		caption{text-align: left; font-style: italic; margin-bottom: 5px;}
		th{background: #999;}
		td{padding-left: 10px;}
		td.centralize, p{text-align: center;}
		td, th{border: 1px solid #b1b1b1;}
		button{display: block; margin-left: auto;}
	</style>
</head>

<body>
	<h1>PHP Arrays</h1>
	<br/><br/>

	<form id="form" action="" method="post">
		<fieldset>
			<legend>Capitals</legend>
			<?php
				$i = 0;

				foreach ($capitals as $name => $popul) {
					//Ordenação mantendo a relação key x value:
					asort($capitals);
					
					//Gerando input dinâmico:
					echo "<input type='radio' name='capital' value='$i'/>$name<br/>";

					$i++;
				}

				//Referência:
				// echo "<pre>";
				// print_r($capitals);
				// echo "</pre>";
			?>
			<br/>

			<label for="">Insert Capital</label>
			<input type="text" name="capname"/>
			<br/><br/>

			<label for="">Select Operation</label>
			<select name="operations">
				<option value="a">Respective Population</option>
				<option value="b">Increased</option>
				<option value="c">Decreased</option>
				<option value="d">Check City</option>
				<option value="e">Populational Average</option>
				<option value="f">Below Average Capitals</option>
				<option value="g">Most Dense Capital</option>
				<option value="h">Write Vector Content</option>
				<option value="i">See Full Table</option>
			</select>
			<br/>

			<button type="submit" form="form" name="send">Submit</button>
		</fieldset>
	</form>

	<!-- Script php para processamento de dados: -->
	<?php
		//Receber dados do formulário, processados somente após o "submit":
		if(isset($_POST["send"])) { //Após submit setado como true (function "is set"), executar código;
			$operation = $_POST["operations"]; //Atribuição do valor "value";

			//Selected "a":
			if ($operation == "a") {
				//Atribuição do valor "value";
				$capital = $_POST["capital"]; 

				//Os valores recebidos pelo formulário em php são tratados inicialmente como string:
				if ($capital == "0") {
					$pop = $capitals["Florianópolis"];
					$poped = number_format($pop, 0, ",", ".");
					echo "<p> Florianópolis: ", $poped,"</p>";
				}

				else if ($capital == "1") {
					$pop = $capitals["São Paulo"];
					$poped = number_format($pop, 0, ",", ".");
					echo "<p> São Paulo: ", $poped,"</p>";
				}

				else if ($capital == "2") {
					$pop = $capitals["João Pessoa"];
					$poped = number_format($pop, 0, ",", ".");
					echo "<p> João Pessoa: ", $poped,"</p>";
				}

				else if ($capital == "3") {
					$pop = $capitals["Salvador"];
					$poped = number_format($pop, 0, ",", ".");
					echo "<p> Salvador: ", $poped,"</p>";
				}

				else if ($capital == "4") {
					$pop = $capitals["Porto Alegre"];
					$poped = number_format($pop, 0, ",", ".");
					echo "<p> Porto Alegre: ", $poped,"</p>";
				}

				else echo "<p>This is the \"no option\" warning!
					<br/>
					Choose one capital above, and click Submit again!
				</p>";
			}

			//Selected "b":
			else if ($operation == "b") {
				//Utilização de ordenação krsort():
				asort($capitals);

				//Mostrar os dados ordenados em table:
				echo "
				<table>
					<caption>Increased</caption>

					<tr>
						<th>Capital</th>
						<th>Population</th>
					</tr>";

					foreach ($capitals as $name => $pop) {
						$poped = number_format($pop, 0, ",", ".");

						echo "
						<tr>
							<td>$name</td>
							<td>$poped</td>
						</tr>
						";
					}
				echo "</table>";
			}

			//Selected "c":
			else if ($operation == "c") {
				//Utilização de ordenação krsort():
				arsort($capitals);

				//Mostrar os dados ordenados em table:
				echo "
				<table>
					<caption>Decreased</caption>

					<tr>
						<th>Capital</th>
						<th>Population</th>
					</tr>";

					foreach ($capitals as $name => $pop) {
						$poped = number_format($pop, 0, ",", ".");

						echo "
						<tr>
							<td>$name</td>
							<td>$poped</td>
						</tr>
						";
					}
				echo "</table>";
			}

			//Selected "d":
			else if ($operation == "d") {
				//Receber o nome do aluno fornecido no input:
				$capital = $_POST["capname"];

				//Usar função pronta (exemplo: "in_array($value, $array)"):
				$exists = array_key_exists($capital, $capitals);

				if ($exists) {
					$pop = $capitals[$capital];
					$poped = number_format($pop, 0, ",", ".");
					echo "<p>$capital EXISTS, and the population is $poped people!</p>";
				}

				else echo "<p>$capital DON'T EXIST!</p>";
			}

			//Selected "e"
			else if ($operation == "e") {
				//Função de soma dos elementos de um array (array_sum) e de contagem de índice (count):
				$mediapop = array_sum($capitals) / count($capitals);
				$mediaded = number_format($mediapop, 0, ",", ".");

				echo "<p>The general Population Average is $mediaded!</p>";
			}

			//Selected "f"
			else if ($operation == "f") {
				//Função de soma dos elementos de um array (array_sum) e de contagem de índice (count):
				$mediapop = array_sum($capitals) / count($capitals);

				//Contar o número de alunos acima da média geral;
				$aux = 0; 

				foreach ($capitals as $name => $pop)
					if($pop < $mediapop)
						$aux++;

				if($aux != 0)
					echo "<p>$aux capitals are Below the general population average.</p>";
				else echo "<p>There is 0 capitals Below the general population average.</p>";
			}

			//Selected "g"
			else if ($operation == "g") {
				//Retorno do maior valor do array max($array) ou min($array):
				$dense = max($capitals);

				//Atribuindo valor ao índice;
				$name = array_search($dense, $capitals); 
				$densed = number_format($dense, 0, ",", ".");

				echo "<p>The most dense capital is $name with $densed people!</p>";
			}

			//Selected "h"
			else if ($operation == "h") {
				//Função (implode) para converter array em string:
				$capitalsS = implode(" - ", $capitals);

				echo "<p>Success!
					<br/>
					\$capitals values = $capitalsS
				</p>";
			}

			//Selected "i"
			else if ($operation == "i") {
				//Adicionar, manualmente, mais alguns dados no array:
				$capitals["Rio de Janeiro"] = 6320000;
				$capitals["Campo Grande"] = 774202;
				
				//Mostrar os dados ordenados em table:
				echo "<table>
					<caption>Capitals Added</caption>

					<tr>
						<th>Capital</th>
						<th>Population</th>
					</tr>";

					asort($capitals);

					foreach ($capitals as $name => $pop) {
						$poped = number_format($pop, 0, ",", ".");

						echo "
						<tr>
							<td>$name</td>
							<td>$poped</td>
						</tr>
						";
					}
				echo "</table>";
			}
		}
	?>
</body>

</html>