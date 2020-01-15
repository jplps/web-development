<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:
        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;
        Ex.: 2 - Formulários & PHP (excs12).
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PRW 702</title>

        <style>
            body{text-align: center;}
            h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
            text-transform: capitalize;}
            fieldset{width: 40%; margin: auto;}
            span{font-weight: bold; font-size: 150%;}
            p{text-align: center; font-size: 110%;}
        </style>
    </head>

    <body>
        <h1>php form 2</h1>

        <br/><br/>

        <fieldset>
            <?php
                //Criando variavel $x com o primeiro valor do formulario:
                $x = $_POST["distancy"];
                $y = $_POST["consumption"];
                $z = $_POST["price"];

                //Cálculo da qtd de Litros de combustível gasto:
                $L = $x / $y; //distancy / consumption

                //Gasto da viagem em $:
                $total = $L * $z;

                //Arredondamento com number_format():
                $spended = number_format($L, 2, ".", ",");
                $spent = number_format($total, 2, ".", ",");

                //Imprimindo resultado na tela do navegador:
                echo "<p>
                    ", $x," - Total Distance (km)
                    <br/>
                    ", $y," - Consumption (km/L)
                    <br/>
                    ", $spended," - Total GAS Consumption (L)
                    <br/>
                    ", $spent," - Total Money Spent ($)
                </p>"
            ?>
        </fieldset>
    </body>
</html>