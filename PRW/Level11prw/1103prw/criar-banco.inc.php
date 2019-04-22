<?php
	$sql = "CREATE DATABASE IF NOT EXISTS $nomeDoBanco";

	$resultado = $conexao->query($sql) or exit($conexao->error);