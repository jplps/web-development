<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:

        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;

        Ex.: 2 - Script que mostra as principais informações sobre o interpretador
        php instalado no servidor (função phpinfo();).

    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Ex.: 2</title>
        <style>
            body{text-align: center;}
            h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;}

        </style>
        
    </head>
    <body>
        <h1>The "phpinfo()" Function</h1>

        <?php
            //Função que disponibiliza uma série de informações úteis e relevantes para o usuário;
            phpinfo();

        ?>
                
    </body>
</html>