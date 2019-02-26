<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:
        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;
        Ex.: 3 - Arrays & PHP
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PRW 803</title>

        <style>
            body{color: #666;}
            h1{width: 70%; border-bottom: 2px solid #666; margin: auto; padding: 10px;
            text-transform: capitalize; text-align: center;}
            fieldset{margin: 40px auto;}
            #field01{width: 65%;}
            span{font-weight: bold; font-size: 150%;}
            table{width: 50%; margin: auto; border: 1px solid #666; border-collapse: collapse;}
            button{display: block; margin-left: auto;}
        </style>
    </head>

    <body>
        <h1>php arrays 3</h1>

        <form id="form" action="" method="post">
            <fieldset id="field01">
                <fieldset>
                    <legend>Employee 001</legend>

                    <label for="">Registration</label>
                    <input type="text" name="registration1" />

                    <br/>

                    <label for="">Paycheck</label>
                    <input type="number" name="paycheck1" min="0" step="0.01" />
                </fieldset>

                <fieldset>
                    <legend>Employee 002</legend>

                    <label for="">Registration</label>
                    <input type="text" name="registration2" />

                    <br/>

                    <label for="">Paycheck</label>
                    <input type="number" name="paycheck2" min="0" step="0.01" />
                </fieldset>

                <fieldset>
                    <legend>Employee 003</legend>

                    <label for="">Registration</label>
                    <input type="text" name="registration3" />

                    <br/>

                    <label for="">Paycheck</label>
                    <input type="number" name="paycheck3" min="0" step="0.01" />
                </fieldset>

                <button type="submit" form="form" name="send">Submit</button>
            </fieldset>
        </form>

        <?php
            if(isset($_POST["send"])){
                //Recebendo dados do formulário:
                $reg1 = $_POST["registration1"];
                $pc1 = $_POST["paycheck1"];

                $reg2 = $_POST["registration2"];
                $pc2 = $_POST["paycheck2"];

                $reg3 = $_POST["registration3"];
                $pc3 = $_POST["paycheck3"];

                //Atribuindo ao array com matrícula como índice (key):
                $workers = array(
                    $reg1 => $pc1,
                    $reg2 => $pc2,
                    $reg3 => $pc3
                );

                echo "<pre>";
                print_r($workers);
                echo "</pre>";
            }
        ?>
    </body>
</html>