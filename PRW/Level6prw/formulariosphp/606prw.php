<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:

        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;

        Ex.: 5 - Formulários & PHP (excs09).

    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Ex.: 5</title>
        <style>
            body{text-align: center;}
            h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
            text-transform: capitalize;}


        </style>
        
    </head>
    <body>
        <!--
            O método corresponde aos vetores $_POST e $_GET, já existentes no
            PHP, utilizando os "name"s para ordená-los, e guardando os dados
            fornecidos em cada input em seus respectivos endereços:
        -->
        <h1>php form</h1>

        <?php
            //Fazendo o php receber os dados do formulário:
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];
            
            $xpression = ($num1 - $num2) * $num3;

            echo "<p>
                Your soul is submmited.
                <br><br>

                <!--A contrabarra cancela caracteres especiais:-->
                \"\$xpression = (\$num1 - \$num2) * \$num3\"
                <br><br>

                $xpression = ($num1 - $num2) * $num3
            
            </p>"
        
        ?>

    </body>
</html>