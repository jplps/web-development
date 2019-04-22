<?php
	//qualquer dado criptografado pelo PHP deve ser armazenado em uma coluna VARCHAR da tabela com, no mínimo, 128 caracteres 
	$sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela (
						cpf VARCHAR(20) PRIMARY KEY,
						nome VARCHAR(200),
						cartao VARCHAR(130),
						origem VARCHAR(20),
						diarias DECIMAL(6,1) UNSIGNED,
						valor DECIMAL(6,2) UNSIGNED,
						aviao VARCHAR(30),
						data DATETIME)";
																
	$resultado = $conexao->query($sql) or exit($conexao->error);