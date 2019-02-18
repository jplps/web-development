<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:
        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;
        Ex.: 3 - Formulários & PHP (excs13).
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PRW 703</title>

        <style>
            body{text-align: center;}
            h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
            text-transform: capitalize;}
            fieldset{width: 40%; margin: auto;}
            span{font-weight: bold; font-size: 120%;}
        </style>
    </head>

    <body>
        <h1>php form 3</h1>

        <br/><br/>

        <fieldset>
            <?php
                //Criando variavel $x com o primeiro valor do formulario:
                $st = $_POST["salestotal"];
                
                //Cálculo do desconto de 10%:
                $discount = $st * 0.1;

                //Cálculo do ICSM (12%):
                $icms = $st * 0.12;

                //Cálculo da comissão (5%):
                $cmss = $st * 0.05;

                //Cálculo do restante (líquido):
                $liquid = $st - $icms - $discount - $cmss;

                //Arredondamento com number_format():
                $stround = number_format($st, 2, ",", ".");
                $discounted = number_format($discount, 2, ",", ".");
                $icmsed = number_format($icms, 2, ",", ".");
                $cmssed = number_format($cmss, 2, ",", ".");
                $liquided = number_format($liquid, 2, ",", ".");

                //Imprimindo resultado na tela do navegador:
                echo "<p>
                    $", $stround," - Total Full ($)
                    <br/><br/>
                    $", $discounted," - Discount (10%)
                    <br/>
                    $", $icmsed," - ICMS (12%)
                    <br/>
                    $", $cmssed," - Comission (5%)
                    <br/><br/>

                    <span>$", $liquided," - Total Liquid ($)</span>
                </p>"
            ?>
        </fieldset>
    </body>
</html>