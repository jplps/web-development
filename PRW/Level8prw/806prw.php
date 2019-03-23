<?php
  //Criando matriz (tridimensional arrays) para armazenar dados:
  $accounts["1010-x1"] = ["Joana de Almeida", 6800];
  $accounts["1010-x2"] = ["Genésio de  Ataíde", 15300];
  $accounts["1010-x3"] = ["Maria das Graças", 4100.12];
  $accounts["1010-x4"] = ["Calorine Prado", 2300.76];

  // //Referência:
  // echo "<pre>";
  // print_r($students);
  // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
  <!--
    Notas:
    Diretório geral em debian-based distros: /var/www/html;
    Endereço http://localhost/path/to/file.php para acessar a aplicação;
    Ex.: 6 - Arrays & PHP
  -->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PRW 806</title>

    <style>
			body{width:66.6%; color:#666; margin: auto;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:capitalize; text-align:center; position:sticky; top:0;}
			fieldset{margin-top:20px;}
			button{display:block;margin:5px auto;}
			input{margin:5px;}
			p{float:right;}
    </style>
  </head>

  <body>
    <h1>php arrays 4</h1>

    <form id="form" action="" method="post">
      <fieldset>
        <legend>Data Process</legend>

        <label for="">Account:</label>
        <input type="text" name="account" id="">

        <br/>

        <label for="">Value:</label>
        <input type="text" name="value" id="">

        <br/>

        <input type="radio" name="operation" value="0"/>Outcome<br/>
        <input type="radio" name="operation" value="1"/>Income<br/>
      </fieldset>

      <fieldset>
        <legend>Operations</legend>
        
        <button type="submit" form="form" name="send">Execute</button>
      </fieldset>
    </form>

    <?php
      if(isset($_POST["send"])){
        //Recebe matrícula do select:
        $cc = $_POST["account"];
        $val = $_POST["value"];

        $operation = $_POST["operation"]; //Atribuição do valor "value";

        if ($operation == "1")
          foreach ($accounts as $account => $clients) {
            if ($cc == $account)
              $accounts[$account][1] -= $val;

        else if ($operation == "2")
          foreach ($accounts as $account => $clients) {
            if ($cc == $account)
              $accounts[$account][1] += $val;

        else
          echo "<p>
            Select outcome or income PLEASE.
          </p>";
      }
    ?> 
  </body>
</html>