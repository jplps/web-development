<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:
        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;
        Ex.: 1 - Formulários & PHP (excs11).
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PRW 701</title>

        <style>
            body{text-align: center;}
            h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
            text-transform: capitalize;}
            fieldset{width: 40%; margin: auto;}
            span{font-weight: bold; font-size: 150%;}
            p{text-align: center; font-size: 150%;}
        </style>
    </head>

    <body>
        <h1>php form 2</h1>

        <br/><br/>

        <fieldset>
            <?php
                //Criando variavel $x com o primeiro valor do formulario:
                $x = $_POST["num1"];
                $y = $_POST["num2"];
                $z = $_POST["num3"];

                //Cálculo da média:
                $media = ($x + $y + $z) / 3;

                //Arredondamento com number_format():
                $mediaRedonda = number_format($media, 2, ".", ",");

                //Imprimindo resultado na tela do navegador:
                echo "<p>
                    A média do aluno(a) é:

                    <br/>

                    (", $x," + ", $y," + ", $z,") / 3 =

                    <br/>

                    <span>", $mediaRedonda,"!</span>
                </p>"
            ?>
        </fieldset>
    </body>
</html>