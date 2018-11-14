<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:

        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;

        Ex.: 6 - Formulários & PHP (excs10).

    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Ex.: 6</title>
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
            //Criando variavel $x com o primeiro valor do formulario:
            $x = $_POST["num1"];

            //Recebendo e guardando outros dois valores e colocando em constantes:
            define("Y", $_POST["num2"]);
            define("Z", $_POST["num3"]);

            $xpression = (($x - 5) * Y) - Z;

            echo "<p>
                Variable \$x = $x <br>
                1st Constant Y = ", Y,"<br>
                2nd Constant Z = ", Z,"<br><br>
                
                \$xpression = ((\$x - 5) * Y) - Z
                <br><br>

                \$xpression = $xpression
            
            </p>"
        
        ?>

    </body>
</html>