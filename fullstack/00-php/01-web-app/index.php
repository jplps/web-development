<!--
	Diretório geral em debian-based distros: /var/www/html;
	Endereço http://localhost/path/to/file.php para acessar a aplicação;
	
	2 - POO + SQL
-->
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php & poo 2</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
		<h1>PHP & OOP</h1>

    <h2>Agrocooperative AAA - temperature control with 3d arryas in PHP</h2>
    
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

            <label class='align'>first temperature:</label>
            <input type='number' name='t$i' id='' /><br/>

            <label class='align'>second temperature:</label>
            <input type='number' name='t",$i+1,"' id='' />
          </fieldset>
        ";
      }
      ?>
      <div class="buttons">
        <button class="center" type="submit" name="submit">Temperature Average</button>
      </div>
    </form>

    <?php
      require "./index.inc.php";

      doit();
    ?>

  </body>
</html>

