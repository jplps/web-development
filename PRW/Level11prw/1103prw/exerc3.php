<!DOCTYPE html> 
<html lang="pt-BR"> 
	<head> 
		<meta charset="utf-8"> 
		<title> Banco de Dados MySQL com PHP  </title> 
			<link rel="stylesheet" href="formata-banco.css">
	</head> 

	<body>
		<h1> PHP + MySQL + POO - exercício3 - controle de hotelaria </h1>
		
		<form action="exerc3.php" method="post">
			<fieldset>
				<legend> Hotelaria - cadastro e processamento de informações </legend>
				
				<label class="alinha"> Nome: </label> 
				<input type="text" name="nome" class="maior" autofocus> <br> 
				
				<label class="alinha"> CPF: </label> 
				<input type="text" name="cpf"> <br>
				
				<label class="alinha"> Número do cartão: </label>
				<input type="text" name="cartao"> <br>
				
				<label class="alinha"> Previsão de estadia: </label>
				<input type="number" name="diarias" min="0" step="0.5"> <br>
				
				<label class="alinha"> Valor da diária: </label>
				<input type="number" name="valor" min="0" step="0.01"> <br> <br>
				
				<label class="alinha"> Procedência: </label>
				<input type="radio" name="procedencia" value="Brasil"> Brasil 
				<input type="radio" name="procedencia" value="Argentina"> Argentina <br> <br>

				<label class="alinha"> Companhias aéreas utilizadas: </label>
				<input type="checkbox" name="aviao[]" value="GOL"> GOL 
				<input type="checkbox" name="aviao[]" value="Avianca"> Avianca <br> <br>
					
				<button type="submit" name="cadastrar"> Cadastrar hóspede </button>
			</fieldset>
			
			<fieldset>
				<legend> Alteração de diárias </legend>
				
				<label class="alinha"> CPF a ser pesquisado: </label>
				<input type="text" name="pesquisa-cpf"> <br> 
				
				<label class="alinha"> Novo número de diárias: </label>
				<input type="number" name="altera-diarias" min="0" step="0.5"> <br> <br>
				
				<button type="submit" name="alterar"> Alterar diárias </button>
			</fieldset>
			
			<fieldset>
				<legend> Outras operações no banco de dados </legend>
				
				<label class="alinha"> Selecione outra operação: </label>
				<select name="operacao">
					<option value="1"> Excluir hóspedes </option>
					<option value="2"> Listar dados1 </option>
					<option value="3"> Listar dados2 </option>
					<option value="4"> Totalizar faturamento </option>
				</select> <br> <br> <br>
				
				<button type="submit" name="enviar"> Executar operação </button>
			</fieldset>
		</form>

		<?php
			require "dados-conexao.inc.php";
			require "conectar.inc.php";	
			require "criar-banco.inc.php"; 
			require "selecionar-banco.inc.php";
			require "definir-charset.inc.php";
			require "criar-tabela.inc.php";
			
			require "criar-classe.inc.php";
			
			//criar um objeto HOSPEDE
			$hospede = new Hospede();
			
			//testando o cadastro
			if(isset($_POST["cadastrar"]))	
				{
				$hospede -> receberDados($conexao);
				$hospede->cadastrar($conexao, $nomeDaTabela);	
				echo "<p> Hóspede cadastrado com sucesso. </p>";
				}
				
			//efetuando a operação de alteração do número de diárias
			if(isset($_POST["alterar"]))
				{
				$hospede->alterar($conexao, $nomeDaTabela);	
				}
				
			//testar se o usuário acionou o último submit
			if(isset($_POST["enviar"]))
				{
				//receber a operação escolhida pelo usuário no select
				$operacao = $_POST["operacao"];
				if($operacao == "1") //excluir
					$hospede->excluir($conexao, $nomeDaTabela);
					
				if($operacao == "2") //listar1
					$hospede->listar1($conexao, $nomeDaTabela);
					
				if($operacao == "3") //listar2
					$hospede->listar2($conexao, $nomeDaTabela);
					
				if($operacao == "4") //totalizar faturamento com todos os hóspedes
					$hospede->totalizar($conexao, $nomeDaTabela);
				}
			
			require "desconectar.inc.php";
		?>
	</body>
</html> 