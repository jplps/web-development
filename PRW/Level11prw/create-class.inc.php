<?php
  //Criar classe referente às operações:
	class Student
	{
		var $reg;
		var $uc;
		var $g0;
		var $g1;
		
		//Método para receber os dados do formulário:
		function registerData($connection)
		{
			//Cuidado com os métodos de recebimento de dados para serem enviados ao MySQL. Pode haver risco de injeção de SQL. Para isso, usamos funções do PHP que impedem este tipo de ataque:
			$reg = trim($connection->escape_string($_POST["reg"]));
			$uc = trim($connection->escape_string($_POST["uc"]));
			$g0 = trim($connection->escape_string($_POST["g0"]));
			$g1 = trim($connection->escape_string($_POST["g1"]));
			
			//atribuímos cada variável aos campos da classe
			$this->reg = $reg;
			$this->uc = $uc;
			$this->g0 = $g0;
			$this->g1 = $g1;
    }
  }
?>