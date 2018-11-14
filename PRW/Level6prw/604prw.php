<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:

        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;

        Ex.: 4 - Variáveis do tipo numérico, boolean e string.
        Utilização de declarações, operação e contrução do "echo" com apóstrofos
        e com aspas (excs06, 07, e 08).

    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Ex.: 4</title>
        <style>
            body{text-align: center;}
            h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
            text-transform: capitalize;}

        </style>
        
    </head>
    <body>
        <h1>new old stuff</h1>

        <!--Chamado do PHP-->
        <?php
            //Criação de Variáveis:
            $name = "Johnny Butt";
            $age = 27;
            $masterDegree = false;
            $bank = 100.00;
            $income = 600.00;

            //Numero Octal (começando com o zero na frente do número):
            $incomeOCTA = 012;

            //Número em Hexadecimal (começando com zero e x na frente do número):
            $incomeHEXA = 0xF;

            //Operação (php converte os valores para decimal e opera):
            $finalBank = $bank + $income * ($incomeHEXA / $incomeOCTA);
            
            echo "<p>
            Outcome of the process: <br><br>
            Name: $name <br>
            Age: $age <br>
            Bank: $bank <br><br>

            <!--Descrição da Operação:-->
            $finalBank = $bank + $income * ($incomeHEXA / $incomeOCTA)

            </p>";

            echo '<p>Final Amount Value: $$finalBank</p>';

        ?>
                
    </body>
</html>