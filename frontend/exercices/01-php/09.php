<!DOCTYPE html>
<html lang="en">
  <head>
    <!--
      Notas:
      Diretório geral em debian-based distros: /var/www/html;
      Endereço http://localhost/path/to/file.php para acessar a aplicação;
      Ex.: 10 - Arrays & PHP
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PRW 807</title>

    <style>
			body{width:66.6%; color:#666; margin:0 auto 40px;}
			h1{border-bottom:2px solid #666; margin:auto; padding:10px;
			text-transform:capitalize; text-align:center; position:sticky; top:0;}
			fieldset{margin: 40px auto 40px;}
			button{display:block;margin:5px auto;}
			input, select{padding:5px;margin:5px;}
			p{float:right;}
      span{font-weight: bold; font-size: 150%;}
      table{margin: auto; border: 1px solid #666; border-collapse: collapse;}
      caption{text-align: left; font-style: italic; margin-bottom: 5px;}
      th{background: #999;}
      td{padding-left: 10px;}
      td.centralize, p{text-align: center;}
      td, th{min-width:70px;border: 1px solid #b1b1b1;}
    </style>
  </head>

  <body>
    <h1>php arrays 7</h1>

    <form id="form" action="" method="post">
      <fieldset>
        <legend>First ONE</legend>

        <label for="">CPF</label>
        <input type="text" name="cpf0" id="">
        <br/>

        <label for="">NAME</label>
        <input type="text" name="name0" id="">
        <br/>

        <label for="">BUY</label>
        <input type="number" name="buy0" step="0.01" id="">
        <br/>

        <label for="">PAYMENT</label>
        <select name="payment0" id="">
          <option value="CARD">CARD</option>
          <option value="MONEY">MONEY</option>
          <option value="OTHER">OTHER</option>
        </select>
      </fieldset>

      <fieldset>
        <legend>Second ONE</legend>

        <label for="">CPF</label>
        <input type="text" name="cpf1" id="">
        <br/>

        <label for="">NAME</label>
        <input type="text" name="name1" id="">
        <br/>

        <label for="">BUY</label>
        <input type="number" name="buy1" step="0.01" id="">
        <br/>

        <label for="">PAYMENT</label>
        <select name="payment1" id="">
          <option value="CARD">CARD</option>
          <option value="MONEY">MONEY</option>
          <option value="OTHER">OTHER</option>
        </select>
      </fieldset>

      <fieldset>
        <legend>Operations</legend>
        
        <button type="submit" form="form" name="send">SEND YOUR DATA</button>
      </fieldset>
    </form>

    <?php
      if(isset($_POST["send"])){
        //Adicionando Primeiro:
        $cpf = $_POST["cpf0"];
        $name = $_POST["name0"];
        $buy = $_POST["buy0"];

        //Recebe matrícula do select:
        $payment = $_POST["payment0"];

        //Criando matriz (tridimensional arrays) para armazenar dados:
        $clients[$cpf] = [$name, $buy, $payment];

        //Adicionando Segundo:
        $cpf = $_POST["cpf1"];
        $name = $_POST["name1"];
        $buy = $_POST["buy1"];

        //Recebe matrícula do select:
        $payment = $_POST["payment1"];

        //Criando matriz (tridimensional arrays) para armazenar dados:
        $clients[$cpf] = [$name, $buy, $payment];

// //Referência:
// echo "<pre>";
// print_r($clients);
// echo "</pre>";

        $lowestname = "";
        $lowestbuy = 0;

        foreach ($clients as $cpf => $specs){
          if ($lowestbuy == 0)
            $lowestbuy = $specs[1];

          else if ($specs[1] < $lowestbuy)
            $lowestbuy = $specs[1];
            $lowestname = $specs[0];
        }

        echo "<p>
          The lowest buy was $lowestbuy by $lowestname.
        </p>";

        //Mostrar os dados ordenados em table:
        echo "<table>
          <caption>Card / Money Buys</caption>

          <tr>
            <th>CPF</th>
            <th>NAME</th>
            <th>BUY</th>
            <th>PAYMENT</th>
          </tr>";
          foreach ($clients as $cpf => $specs) {
            if ($specs[2] == "CARD" || $specs[2] == "MONEY")
              echo "<tr>
                <td>$cpf</td>
                <td>",$specs[0],"</td>
                <td>",$specs[1],"</td>
                <td>",$specs[2],"</td>
              </tr>";
          }

        echo "</table>";

        //Conversão de Dotz:
        foreach ($clients as $cpf => $specs){
          if ($specs[2] == "CARD" || $specs[2] == "MONEY"){
            $dotz = $specs[1] / 2;
            $dclients[$cpf] = [$specs[0], $dotz];
          }
          else if ($specs[2] == "OTHER"){
            $dotz = $specs[1] / 4;
            $dclients[$cpf] = [$specs[0], $dotz];
          }
        }

// //Referência:
// echo "<pre>";
// print_r($dclients);
// echo "</pre>";

        //Mostrar os dados ordenados em table:
        echo "<table>
        <caption>Dotz Converted</caption>

        <tr>
            <th>CPF</th>
            <th>NAME</th>
            <th>DOTZ</th>
        </tr>";

        foreach ($dclients as $dcpf => $specs)
          echo "
            <tr>
              <td>$dcpf</td>
              <td>",$specs[0],"</td>
              <td>",$specs[1],"</td>
            </tr>
            ";

        echo "</table>";
      }
    ?>
  </body>
</html>