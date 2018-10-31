<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:

        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;

    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP Fundamentals</title>
        
    </head>
    <body>
        <h1>The First PHP Application</h1>

        <!--
            Chamado do PHP - Primeira "ZONA": Não importa o local, as Zonas do
            php podem ser abertas em qualquer lugar do código. O PHP nunca mostrará
            o código executado. Com o wget ou outras ferramentas, somente é
            possível enxergar o trabalho já feito, o resultado do processamento.
        -->
        <?php
            //O Comando "echo" retorna o texto recebido:
            echo "<p>Yeah!</p>";

        ?>
                
    </body>
</html>