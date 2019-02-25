<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:
        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;
        Ex.: 5 - Formulários & PHP (excs14).
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PRW 705</title>

        <style>
            body{text-align: center;}
            h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
            text-transform: capitalize;}
            fieldset{width: 40%; margin: auto;}
            input{width: 20%; align: left;}
            span{font-weight: bold; font-size: 150%;}
        </style>
    </head>

    <body>
        <h1>php form 5</h1>

        <br/><br/>

        <form id="form" action="705prw.php" method="post">
            <fieldset>
                <label for="">Positive Real Temperature (°Celsius)</label>
                <input type="number" name="num" min="0" step="any"/>

                <br/><br/>

                <button type="submit" form="form" value="submit">Submit to Result</button>
            </fieldset>

            <?php
                    //Criando variavel $x com o primeiro valor do formulario:
                    $fahr = $_POST["num"];
                    
                    //Cálculo da transformação:
                    $cels = ($fahr - 32) * (5/9);

                    //Arredondamento com number_format():
                    $celsed = number_format($cels, 2);

                    //Imprimindo resultado na tela do navegador:
                    echo "<p>
                            $fahr °Fahrenheit = $celsed °Celsius
                    </p>";
                ?>
        </form>
    </body>
</html>