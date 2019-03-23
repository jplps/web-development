<?php
  //Criando matriz (tridimensional arrays) para armazenar dados:
  $accounts["1010-x1"] = ["Joana de Almeida", 6800];
  $accounts["1010-x2"] = ["Genésio de  Ataíde", 15300];
  $accounts["1010-x3"] = ["Maria das Graças", 4100.12];
  $accounts["1010-x4"] = ["Calorine Prado", 2300.76];

  // //Referência:
  // echo "<pre>";
  // print_r($accounts);
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
			input{margin:5px;}
			p{float:right;}
      table{margin: auto; border: 1px solid #666; border-collapse: collapse;}
      caption{text-align: left; font-style: italic; margin-bottom: 5px;}
      th{background: #999;}
      td{padding-left: 10px;}
      td.centralize, p{text-align: center;}
      td, th{min-width:70px;border: 1px solid #b1b1b1;}
    </style>
  </head>

  <body>
    <h1>php arrays 6</h1>

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
        <legend>Options</legend>

        <select name="option" id="">
          <option value="0">Update</option>
          <option value="1">Higher</option>
          <option value="2">See Added</option>
        </select>
        
        <button type="submit" form="form" name="send">Execute</button>
      </fieldset>
    </form>

    <?php
      if(isset($_POST["send"])){
        $opt = $_POST["option"];

        if($opt == "0"){
          if(isset($_POST["operation"])){
            $ccn = $_POST["account"];
            $valn = $_POST["value"];
            $opr = $_POST["operation"];

            foreach($accounts as $cc => $specs)
              if($cc == $ccn)
                if($opr == "0")
                  $specs[1] -= $valn;
                else
                  $specs[1] += $valn;
          }

          else
            echo "<p>
              Choose Outcome or Income please...
            </p>";
        }

        if($opt == "1"){
          $highername = "";
          $higherpay = 0;
  
          foreach ($accounts as $cpf => $specs){
            if ($higherpay == 0){
              $higherpay = $specs[1];
              $highername = $specs[0];
            }

            else if ($specs[1] > $higherpay){
              $higherpay = $specs[1];
              $highername = $specs[0];
            }
          }

          echo "<p>
            The higher pay is $higherpay by $highername.
          </p>";
        }

        else if($opt == "2"){
          $accounts["1010-x5"] = ["Arthur de Castro", 200];
          $accounts["1010-x6"] = ["Anselmo de  Andrade", 15840];

          //Mostrar os dados ordenados em table:
          echo "<table>
            <caption>All</caption>

            <tr>
              <th>CC</th>
              <th>NAME</th>
              <th>AVAIBLE</th>
            </tr>";

          foreach ($accounts as $cc => $specs){
            echo "<tr>
              <td>$cc</td>
              <td>",$specs[0],"</td>
              <td>",$specs[1],"</td>
            </tr>";
          }

          echo "</table>";
        }
      }
    ?> 
  </body>
</html>