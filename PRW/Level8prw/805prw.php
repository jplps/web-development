<?php
    //Criando matriz (tridimensional arrays) para armazenar dados:
    $students["1010-x1"] = ["João de Ataíde", 7.5, 5.8];
    $students["1010-x2"] = ["Joana de Almeida", 6, 5.5];
    $students["1010-x3"] = ["Maria das Graças", 5, 9];
    $students["1010-x4"] = ["Calorine Prado", 4.2, 7.7];

    //Referência:
    echo "<pre>";
    print_r($students);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:
        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;
        Ex.: 5 - Arrays & PHP
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PRW 805</title>

        <style>
            body{width: 80%; color: #666; margin: auto;}
            h1{border-bottom: 2px solid #666; margin: auto; padding: 10px;
            text-transform: capitalize; text-align: center;}
            fieldset{margin-top: 20px}
        </style>
    </head>

    <body>
        <h1>php arrays 5</h1>

        <form action="" method="post">
            <fieldset>
                <legend>Data Process</legend>

                <label for="">Select Registration</label>

                <select name="reg">
                    <?php
                        foreach ($students as $reg => $vetor) {
                            echo "<option>$reg</option>";
                        }
                    ?>
                </select>
            </fieldset>

            <fieldset>
                <legend>Other Operations</legend>
                <button type="Approvals" form="" name="send">Approvals</button>

                <button type="Rendiment" form="" name="send">Rendiment</button>
            </fieldset>
        </form>

        <?php
            
            echo "
            <table>
                <tr>
                    <th>Registration</th>
                    <th>Name</th>
                    <th>Av. Tests</th>
                    <th>Av. Excs</th>
                </tr>";

                foreach ($students as $reg => $reg)
                    echo "
                    <tr>
                        <td>$reg</td>";
                        foreach ($reg as $test => $test)
                            echo "<td>$test</td>";
                    
                    echo "</tr>";
                
                

            echo "</table>";
        ?>
    </body>
</html>