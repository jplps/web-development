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
      /*
        ***RISCO DE ATAQUE***

        Cuidado com os métodos de recebimento de dados para serem enviados
        ao MySQL. Pode haver risco de injeção de SQL. Para isso, usamos funções
        do PHP que impedem este tipo de ataque:
      */
			$reg = trim($connection->escape_string($_POST["reg"]));
			$uc = trim($connection->escape_string($_POST["uc"]));
			$g0 = trim($connection->escape_string($_POST["g0"]));
			$g1 = trim($connection->escape_string($_POST["g1"]));
			
			//Atribuição cada variável aos campos da classe:
			$this->reg = $reg;
			$this->uc = $uc;
			$this->g0 = $g0;
			$this->g1 = $g1;
    }

    //Função para inserção de dados na tabela:
    function insert($connection, $table){
      $sql = "INSERT $table VALUES (
        '$this->reg',
        '$this->uc',
        '$this->g0',
        '$this->g1'
      )";

      //Envia inserção ou garante aviso de erro:
      $result = $connection->query($sql) || exit($connection->error);
      echo "<p>Success.</p>";
    }

    //Cálculo de média:
    function average($connection, $table){
      //Criando consulta com aplicação matemática, com alias para nomear campo:
      $sql = "SELECT registry, (grade1 + grade2)/2 AS average FROM $table ";

      //Envia inserção ou garante aviso de erro:
      $result = $connection->query($sql) || exit($connection->error);

      //Visualização:
      echo "<table>
        <caption>Average Generated</caption>
  
        <tr>
          <th>Registry</th>
          <th>Average</th>
        </tr>";
        //Utilização do while para lidar com resultado:
        while ($line = $result->fetch_array()) {  //Retorna false quando objeto não for atribuido;
          /*
            ***RISCO DE ATAQUE***
            
          */
          $r = $line[0];
          $a = $line[1];

          echo "<tr>
            <td>$r</td>
            <td>$a</td>
          </tr>";
        }
      echo "</table>";
    }
  }
?>