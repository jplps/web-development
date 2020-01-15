<!DOCTYPE html>
<html lang="en">
	<!--
		Notas:
		Diretório geral em debian-based distros: /var/www/html;
		Endereço http://localhost/path/to/file.php para acessar a aplicação;
		Ex.: 5 - Arrays & PHP
	-->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PRW 805</title>

		<style>
			body{width: 80%; color: #666; margin: auto;}
			h1{border-bottom: 2px solid #666; margin: auto; padding: 10px;
			text-transform: capitalize; text-align: center;}
			fieldset{margin: 20px auto;}
			span{font-weight: bold; font-size: 150%;}
			table{width: 50%; margin: auto; border: 1px solid #666; border-collapse: collapse;}
			caption{text-align: left; font-style: italic; margin-bottom: 5px;}
			th{background: #999;}
			td{padding-left: 10px;}
			td.centralize, p{text-align: center;}
			td, th{border: 1px solid #b1b1b1;}
			input, button {margin: 5px 0;}
		</style>
	</head>

	<body>
		<h1>php arrays 5</h1>

		<form id="form" action="" method="post">
			<fieldset id="product1">
				<legend>Product Registration 1</legend>

				<label for="">Code:</label>
				<input type="text" name="code1" autofocus>
				<br/>

				<label for="">In Stock:</label>
				<input type="number" name="stock1" min="0">
				<br/>

				<label for="">Un Price:</label>
				<input type="number" name="price1" min="0" step="0.01">
				<br/>
			</fieldset>

			<fieldset id="product2">
				<legend>Product Registration 2</legend>

				<label for="">Code:</label>
				<input type="text" name="code2" autofocus>
				<br/>

				<label for="">In Stock:</label>
				<input type="number" name="stock2" min="0">
				<br/>

				<label for="">Un Price:</label>
				<input type="number" name="price2" min="0" step="0.01">
				<br/>
			</fieldset>

			<fieldset id="product3">
				<legend>Product Registration 3</legend>

				<label for="">Code:</label>
				<input type="text" name="code3" autofocus>
				<br/>

				<label for="">In Stock:</label>
				<input type="number" name="stock3" min="0">
				<br/>

				<label for="">Un Price:</label>
				<input type="number" name="price3" min="0" step="0.01">
				<br/>
			</fieldset>

			<fieldset id="operations1">				
				<label for="">Code to Search</label>
				<input type="text" name="searchcode" id="" />

				<br/>
				
				<legend>Product Operations</legend>
				<button type="submit" form="form" name="register">Register</button>
			</fieldset>
		</form>

		<?php
			if(isset($_POST["register"])){
				//Recebe dados e insere em matriz:
				for ($i=1; $i <= 3; $i++) { 
					//Concatenando nome da variável:
					$cod = "code" . $i;
					//Atribuindo de fato:
					$cod = $_POST[$cod];
					
					$stock = "stock" . $i;
					$stock = $_POST[$stock];

					$price = "price" . $i;
					$price = $_POST[$price];

					//Guardando em matriz:
					$products[$cod] = array($stock, $price);
				}

				//Construir impressão:
				echo "
					<table>
						<caption>Registered Products</caption>

						<tr>
							<th>Code</th>
							<th>Price</th>
							<th>In Stock</th>
						</tr>";

				foreach ($products as $cod => $v) {
					echo "
						<tr>
							<td>$cod</td>
							<td>$v[1]</td>
							<td>$v[0]</td>
						</tr>
					";
				}

				echo "</table>";


				//O Mestre do Estoque:
				$stockmaster = 0;

				foreach ($products as $cod => $v) {
					if($v[0] >= $stockmaster){
						$codmaster = $cod;
						$pricemaster = $v[1];
						$stockmaster = $v[0];
					}
				}

				//Construir impressão:
				echo "<p>
					Stock Master Data: <br/><br/>
					Code: $codmaster <br/>
					Price: $pricemaster <br/>
					In Stock: $stockmaster <br/>
				</p>";


				//Faturamento:
				$sum = 0;

				foreach ($products as $cod => $v) {
					$sum = $sum + $v[0] * $v[1];
				}

				$sumed = number_format($sum, 2, ".", ",");

				echo "<p>
					Total Income from Stock is: $sumed
				</p>";


				//
				$searchcode = $_POST["searchcode"];

				if(array_key_exists($searchcode, $products)){
					echo "<p>
						Inquire: <br/><br/>

						Search Code: $searchcode <br/>
						In Stock: ", $products[$searchcode][0],"<br/>
						Price: ", $products[$searchcode][1],"
					</p>";
				}

				else
					echo "<p>
						The inputed code doesn't exist!!!
					</p>";
			}
		?>
	</body>
</html>