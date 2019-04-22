<?php
	class Hospede {
		var $cpf;
		var $nome;
		var $cartao;
		var $diarias;
		var $origem;
		var $valor;
		var $aviao;
		
		function receberDados($conexao) {
			$cpf = trim($conexao->escape_string($_POST["cpf"]));
			$nome = trim($conexao->escape_string($_POST["nome"]));
			$cartao = trim($conexao->escape_string($_POST["cartao"]));
			//criptogranfando, via PHP, o número do cartão de crédito
			$cartao = hash("sha512", $cartao);
			$diarias = trim($conexao->escape_string($_POST["diarias"]));
			$valor = trim($conexao->escape_string($_POST["valor"]));
			//testar se o usuário escolheu algum botão de rádio
			if(isset($_POST["procedencia"]))
				$origem = trim($conexao->escape_string($_POST["procedencia"]));
			else
				$origem = "Nenhuma";
			
			//lembrar que as companhias aéreas são armazenadas pelo PHP em um vetor. Devemos converter o vetor em string antes de enviarmos ao banco de dados. Antes disso, testar se um botão checkbox foi marcado
			if(isset($_POST["aviao"])) {
				$aviao = $_POST["aviao"]; //vetor
				$aviao = implode("-", $aviao); //é uma string
				$aviao = trim($conexao->escape_string($aviao));
			}
			else
				$aviao = "Nenhuma";			
			$this->cpf       = $cpf;
			$this->nome      = $nome;
			$this->cartao    = $cartao;
			$this->diarias   = $diarias;			
			$this->origem    = $origem;			
			$this->valor     = $valor;			
			$this->aviao     = $aviao;			
		}
		
		//-------------------------------------
		
		function cadastrar($conexao, $nomeDaTabela)	{
			$sql = "INSERT $nomeDaTabela VALUES(
				'$this->cpf',	
				'$this->nome',
				'$this->cartao',
				'$this->origem',
				$this->diarias,
				$this->valor,
				'$this->aviao',
				NOW()
				)"; //a função NOW() é aplicada somente a campos de data e faz o MySQL inserir, automaticamente, a cada registro cadastrado, o dia, mês, ano, hora, minuto e segundo em que o cadastro foi efetuado
			$resultado = $conexao->query($sql) or die($conexao->error);
		}
		
		//------------------------------------
		
		function alterar($conexao, $nomeDaTabela)	{
			//receber os dados do formulário para alteração do número de diárias. A chave de pesquisa, no banco, é o cpf do hóspede
			$cpf = trim($conexao->escape_string($_POST["pesquisa-cpf"]));
			$alteraDiarias = trim($conexao->escape_string($_POST["altera-diarias"]));
			
			//consulta de alteração
			$sql = "UPDATE $nomeDaTabela SET diarias=$alteraDiarias WHERE cpf='$cpf'";
			$resultado = $conexao->query($sql) or die($conexao->error);
			//testando se o CPF pesquisado foi encontrado na tabela
			if($conexao->affected_rows > 0)
				echo "<p> A alteração do número de diárias para o hóspede de cpf igual a $cpf foi efetuada com sucesso. </p>";
			else
				echo "<p> O cpf fornecido $cpf não foi encontrado na base de dados. Tente novamente. </p>";		
		}
			
		//------------------------------------------------
		
		function excluir($conexao, $nomeDaTabela) {
			//consulta da exclusão
			$sql = "DELETE FROM $nomeDaTabela WHERE origem='Argentina' AND data < '2018-06-01 00:00:00'";
			$resultado = $conexao->query($sql) or exit($conexao->error);
			if($conexao->affected_rows > 0)
				echo "<p> Foram excluídos $conexao->affected_rows hóspedes argentinos com data de registro anterior a 01/06/2018. </p>";
			else
				echo "<p> Exclusão não foi efetuada. Não há, no banco de dados, nenhum hóspede argentino com check-in anterior a 01/06/2018. </p>";			
		}
			
		//-------------------------------------------------
		
		function listar1($conexao, $nomeDaTabela)	{
			//listar, numa tabela, o nome, o cpf e a data de entrada do todos os hóspedes que NÃO utilizaram nenhuma companhia aérea
			$sql = "SELECT cpf, nome, DATE_FORMAT(data, '%d/%m/%Y - %H:%i:%s') FROM $nomeDaTabela WHERE aviao = 'Nenhuma'";
			$resultado = $conexao->query($sql) or die($conexao->error);
			if($conexao->affected_rows == 0)
				echo "<p> Todos os hóspedes cadastrados utilizaram avião em sua viagem. Impossível listar os dados solicitados. </p>";
			else {
				echo "<table>
					<caption> Relação de hóspedes que não utilizaram avião em sua viagem </cpation>
					<tr>
						<th> CPF </th>
						<th> Nome </th>
						<th> Check-in </th>
					</tr>";
				while($registro = $resultado->fetch_array()) {
					$cpf  = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
					$nome = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
					$data = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
					echo "<tr>
						<td> $cpf </td>
						<td> $nome </td>
						<td> $data </td>
					</tr>";					
				} //fim do enquanto
				echo "</table>";				
			}
		}
			
		function listar2($conexao, $nomeDaTabela){
			//listar nome e o valor pago pela estadia de cada hóspede
			$sql = "SELECT nome, diarias * valor FROM $nomeDaTabela";
			$resultado = $conexao->query($sql) or die($conexao->error);
			//testando se houve retorno de algum registro (a tabela pode
			//estar vazia)
			if($conexao->affected_rows > 0){
				echo "<table>
					<caption>
						Relação do gasto de cada hóspede com sua estadia
					</caption>
					<tr>
						<th>Hóspede</th>
						<th>Despesa (R$)</th>
					</tr>";
					while ($registro = $resultado->fetch_array()) {
						$nome = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
						$despesaFormatada = number_format($despesa, 2, ",", ".");
						echo "<tr>
							<td>$nome</td>
							<td>$despesaFormatada</td>
						</tr>";
					} //fim do laço
				echo "</table>";
			}
			else
				echo "<p>
					Impossível listar despesa por hóspede. A tabela no banco de
					dados está vazia.
				</p>";
		}
		
		//-------------------------------------------------

		function totalizar($conexao, $nomeDaTabela){
			//somar o gasto individual de cada hóspede BRASILEIRO na tabela
			$sql = "SELECT SUM(diarias * valor) FROM $nomeDaTabela WHERE origem = 'Brasil'";
			$resultado = $conexao->query($sql) or die($conexao->error);
			//testando se a consulta retornou algum registro
			if($conexao->affected_rows > 0){
				//a matriz resultado contém apenas uma linha
				$registro = $resultado->fetch_array();
				$total = $registro[0];
				$total = htmlentities($total, ENT_QUOTES, "UTF-8");
				$totalFormatado = number_format($total, 2, ",", ".");
				echo "<p>
					O faturamento total de nosso hotel com hóspedes brasileiros
					é igual a R$$totalFormatado.
				</p>";
			}
			else
				echo "<p>
					A tabela está vazia ou há apenas hóspedes não-brasileiros
					no cadastro.
				</p>";
		}

		//-------------------------------------------------

		function calcularMedia($conexao, $nomeDaTabela) {
			//método que calcula a média de notas de cada aluno
			$sql = "SELECT matricula, (nota1 + nota2)/2 AS media FROM $nomeDaTabela";
			$resultado = $conexao->query($sql) or die($conexao->error);
			echo "<table>
				<caption> Média e matrícula, por aluno </caption>
				<tr>
					<th> Matrícula </th>
					<th> Média </th>
				</tr>";
			while($registro = $resultado->fetch_array())
			{
				//devemos sanitizar as variáveis, antes de enviarmos ao navegador. Assim, evitamos um tipo de ataque conhecido como XSS (cross-site scripting)
				$matricula = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
				$media     = htmlentities($registro["media"], ENT_QUOTES, "UTF-8");
				//podemos usar o próprio nome da coluna como índice
				echo "<tr>
					<td class=\"centra\"> $matricula </td>
					<td class=\"centra\"> $media </td>
					</tr>";
			}
			echo "</table>";
		}
		
		//-----------------------------------
		
		function contarAcima6($conexao, $nomeDaTabela) {
			//consulta para contar, no banco de dados, quantos alunos têm média acima de 6,0
			$sql = "SELECT COUNT(*) FROM $nomeDaTabela WHERE (nota1 + nota2)/2 > 6";
			$resultado = $conexao->query($sql) or die($conexao->error);
			$registro = $resultado->fetch_array();
			$quantos = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
			return $quantos;
		}
	}
?>