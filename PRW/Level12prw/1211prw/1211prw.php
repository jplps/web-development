<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript</title>

    <style>
      body{color:#666; margin: 0 auto;}
      h1{border-bottom:2px solid #666; margin:auto; padding:10px; width: 80vw;
      text-transform:uppercase; text-align:center; position:sticky; top:0;}
      fieldset{margin:auto; width:66.6%; margin-top:20px; text-transform:capitalize;}
			.align {display:inline-block; width:48%; text-align:right;}
			input{margin:5px; width:87px;}
			button{display:block; margin:10px auto; border:1px solid #6666; padding:5px 15px;}
    </style>
  </head>

  <body>
    <h1>js & php</h1>
    
    <form action="#" method="post">
      <fieldset>
        <legend>data fetch</legend>
        
        <label class="align">student</label>
        <input type="text" name="student" autofocus>

        <label class="align">grade 1</label>
        <input type="number" name="g1" min="0" max="10" step="any">

        <label class="align">grade 2</label>
        <input type="number" name="g2" min="0" max="10" step="any">
        
        <button type="submit" name="send">average</button>
      </fieldset>
    </form>

    <?php
      if(isset($_POST["send"])){
        //Pegando valores do formulário
        $student = $_POST["student"];
        $g1 = $_POST["g1"];
        $g2 = $_POST["g2"];

        //Calcular média
        $average = ($g1 + $g2) / 2;
      }
    ?>

    <!-- Execução no servidor -->
    <script>
      
    </script>

    <!-- Execução no cliente -->
    <script src="1211prw.js"></script>
  </body>
</html>