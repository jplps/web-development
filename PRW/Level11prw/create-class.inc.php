<?php
  //Criar classe aluno referente às operações:
	class Student {
		var $reg;
		var $uc;
		var $g0;
		var $g1;
  
    
		/**
     * ***REGISTRO (objeto)
     * 
     * Recebe a conexão e assegura a correta atribuição dos valores ao objeto.
     */
		function registerData($connection){
      /**
       * ***RISCO DE ATAQUE***
       * 
       * - SQL INJECTION 
       * 
       * Cuidado com os métodos de recebimento de dados para serem enviados
       * ao MySQL. Pode haver risco de injeção de código SQL.
       * 
       * Para isso, usamos funções do PHP que impedem este tipo de ataque (trim
       * with escape_string).
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


    /**
     * ***INSERIR (tabela)
     * 
     * Recebe a conexão e a tabela, e executa a Inserção de dados.
     */
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


    /**
     * ***MÉDIA DAS NOTAS
     * 
     * Cálculo da média de notas, e geração de visualização.
     */
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
          /**
           * ***RISCO DE ATAQUE***
           * 
           * - CROSS-SITE SCRIPTING (XSS)
           * 
           * Com a criação de variáveis anterior á sua apresentação, todas as nossas
           * variáveis de última instância podem estar contaminadas com scripts mal
           * intencionados.
           * 
           * Para isso, usamos funções do PHP que impedem este tipo de ataque, com
           * o objetivo de sanitizar os valores (htmlentities($value, encoding,
           * charset)).
           */
          $r = htmlentities($line[0], ENT_QUOTES, "UTF-8");
          $a = htmlentities($line[1], ENT_QUOTES, "UTF-8");

          echo "<tr>
            <td>$r</td>
            <td>$a</td>
          </tr>";
        }
      echo "</table>";
    }


    /**
     * ***ACIMA DA MÉDIA
     * 
     * Cálculo de quantos alunos estão com nota média acima de 6:
     */
    function aboveAv($connection, $table){
      //COUNT: SQL argumento para contagem (* - entram na contagem células null):
      $sql = "SELECT COUNT(*) FROM $table WHERE (grade1 + grade2)/2 >= 6";  //Filtro de registro WHERE <teste lógico>;
    }
  }
?>