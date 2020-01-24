<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:
        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;
        Ex.: 6 - Formulários & PHP (excs16).
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PRW 706</title>

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
        <h1>php form 6</h1>

        <br/><br/>

        <form id="form" action="706prw.php" method="get">
            <fieldset>
                <label for="">Dollars $</label>
                <input type="number" name="dollars" min="0" step="0.01"/>


                <label for="">Tax $</label>
                <input type="number" name="tax" min="0" step="0.01"/>

                <br/><br/>

                <button type="submit" form="form" value="submit">Submit to Result</button>
            </fieldset>

            <?php
                    //Taxa de câmbio constante:
                    define("tax", $_GET["tax"]);
                    $tax = tax;

                    $dollars = $_GET["dollars"];
                    
                    //Cálculo da transformação:
                    $final = $dollars * tax;

                    //Arredondamento com number_format():
                    $finaled = number_format($final, 2);

                    //Imprimindo resultado na tela do navegador:
                    echo "<p>
                            <br/>

                            Tax: $tax
                            
                            <br/>

                            $$dollars dollars converted to R$$final reais.
                    </p>";
                ?>
        </form>
    </body>
</html>