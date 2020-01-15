<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:
        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;
        Ex.: 4 - Formulários & PHP (excs15).
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PRW 704</title>

        <style>
            body{text-align: center;}
            h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
            text-transform: capitalize;}
            fieldset{width: 40%; margin: auto;}
            span{font-weight: bold; font-size: 120%;}
        </style>
    </head>

    <body>
        <h1>php form 4</h1>

        <br/><br/>

        <fieldset>
            <?php
                //Criando variavel $x com o primeiro valor do formulario:
                $x = $_GET["num"];
                
                //Cálculo da raíz quadrada:
                $square = sqrt($x);

                //Cálculo do cubo:
                $cube = pow($x, 3);

                //Cálculo da raíz cúbica:
                $cubic = pow($x, 1/3);

                //Arredondamento com number_format():
                $squared = number_format($square, 2);
                $cubed = number_format($cube, 2);
                $cubiced = number_format($cubic, 2);

                //Imprimindo resultado na tela do navegador:
                echo "<p>
                    ", $squared," - Square Root: 'sqrt(x)'
                    <br/><br/>
                    ", $cubiced," - Cubic Root: 'pow(x, 1/3)'
                    <br/><br/>
                    ", $cubed," - 3rd Potency: 'pow(x, 3)'
                </p>"
            ?>
        </fieldset>
    </body>
</html>