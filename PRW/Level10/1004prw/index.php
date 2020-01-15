<!DOCTYPE html>
<!-- Reproduction Test April 2nd -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <h1>Agrocooperativa AAA - controle de temperaturas com matrizes em PHP</h1>
    
    <form method='post'>
      <?php

      for ($i=0; $i < 2; $i++) {
        echo "
          <fieldset>
            <legend>Levantamento de temperaturas - localidade ",$i+1,"</legend>

            <label class='align'>Forneça o nome da localidade:</label>
            <input type='text' name='loc$i' id='' /><br/>

            ";

            if($i > 0){$i = 2;}

            echo "

            <label class='align'>Forneça a primeira temperatura:</label>
            <input type='number' name='t$i' id='' /><br/>

            <label class='align'>Forneça a segunda temperatura:</label>
            <input type='number' name='t",$i+1,"' id='' />
          </fieldset>
        ";
      }
      ?>
      <div class="buttons">
        <button class="center" type="submit" name="submit">Calcular média de temperaturas</button>
      </div>
    </form>

    <?php
      require "avtmp.inc.php";

      doit();
    ?>

  </body>
</html>

