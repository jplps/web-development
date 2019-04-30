<?php
	//Iniciando sessão no navegador:
	session_start();
	//Inicializando variavel de sessão como false (desconectado)
	$_SESSION["signed"] = false;
?>
<!DOCTYPE html>
<html lang="en">
	<!--
		Notas:
		Diretório geral em debian-based distros: /var/www/html;
		Endereço http://localhost/path/to/file.php para acessar a aplicação;
		Ex.: 5 - POO + SQL
	-->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>PRW + SQL 5</title>

		<style>
			body{width:66.6%; color:#666; margin: auto;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:uppercase; text-align:center; position:sticky; top:0;}
			fieldset{margin-top:20px; text-transform:capitalize;}
			.align {display:inline-block; width:200px; margin:5px; text-align:right;}
			input{max-width:120px;}
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
		<h1>login</h1>

		<form name="form" action="login.php" method="post">
			<fieldset>
				<legend>project control</legend>

				<label class="align">@</label>
				<input type="text" name="mail" autofocus />
				<br/>

				<label class="align">*</label>
				<input type="password" name="pass" min="0" step="0.01" />
				<br/>

				<button type="submit" name="submit">submit</button>
			</fieldset>
		</form>

    <?php
			//Implementar backend
			require "conn-data.inc.php";
			require "connect.inc.php";
			require "create-db.inc.php";
			require "select-db.inc.php";
			require "define-charset.inc.php";
			require "create-table.inc.php";
			require "create-class.inc.php";

			

			if(isset($_POST["submit"])){
				$user = new User();
				getFormData($conn);
				/**
				 * Criar consulta select no db para equipara-los às variáveis
				 * setadas (checar affected rows method):
				 * 
				 * $sql = "SELECT mail, pass, FROM $table WHERE mail='$mail'
				 * AND pass='$pass'";
				*/
				
				//Alterar a sessão
				$_SESSION["signed"] = true;
				//Armazenar a senha e o login criptografados em variáveis de sessão
				$_SESSION["mail"] = $mail;
				$_SESSION["pass"] = $pass;
				//Redirecionar para página restrita
				header("location: protectedpage.php");

				//Sign out rotina:
				// $_SESSION = array();
				// session_destroy();
				// header("location: login.php");
			}

			require "disconnect.inc.php";
    ?>
	</body>
</html>