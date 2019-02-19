<?php
    //Criação do array antes de carregar o html:
    $students = [
        "Maria das Graças" => 6.5,
        "Paulo de Almeida" => 7.8,
        "Rogério da Silva" => 4.2,
        "Jerusa Fontes" => 8.5,
        "Alícia Marques" => 9.0,
        "Zenon Mendes" => 4.1
    ];
?>
<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:
        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;
        Ex.: 1 - Arrays & PHP
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PRW 801</title>

        <style>
            h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
            text-transform: capitalize; text-align: center;}
            fieldset{width: 55%; margin: 0 auto 40px;}
            span{font-weight: bold; font-size: 150%;}
            table{width: 50%; border: 1px solid #666; border-collapse: collapse;}
            caption{text-align: left; font-style: italic; margin-bottom: 5px;}
            th{background: #999;}
            td{padding-left: 10px;}
            td.centralize{text-align: center;}
            td, th{border: 1px solid #b1b1b1;}
            button{display: block; margin-left: auto;}
        </style>
    </head>

    <body>
        <h1>php arrays</h1>

        <br/><br/>

        <fieldset>
            <legend>Arrays Interactions</legend>

            <form id="form" action="801prw.php" method="get">
                <label for="">Select Student</label>
                <select name="students">
                    <?php
                        //Laço de repetição "foreach($variable as $key => $value)":
                        foreach ($students as $name => $grade) {
                            echo "<option>$name</option>";
                        }
                    ?>
                </select>

                <br/>

                <label for="">Student's Name</label>
                <input type="text" name="name"/>
            </form>
        </fieldset>

        <fieldset>
            <legend>Arrays Operations</legend>

            <form action="">
                <label for="">Select Operation</label>

                <br/>

                <input type="radio" name="operation" value="1"/>Student Grades<br/>
                <input type="radio" name="operation" value="2"/>Students Decreased<br/>
                <input type="radio" name="operation" value="3"/>Grades Growing<br/>
                <input type="radio" name="operation" value="4"/>Check Existence<br/>
                <input type="radio" name="operation" value="5"/>Show Average<br/>
                <input type="radio" name="operation" value="6"/>Above Average<br/>
                <input type="radio" name="operation" value="7"/>Lowest Grade<br/>
                <input type="radio" name="operation" value="8"/>Convert Array to String<br/>
                <input type="radio" name="operation" value="9"/>Generate Table<br/>
            </form>

            <br/>

            <button type="submit" form="form" value="submit">Submit</button>
        </fieldset>

        <?php
            //Receber dados do formulário, processados somente após o "submit":
            if(isset($_POST["submit"])){ //Após submit setado como true, executar código;
                $operation = $_POST["operation"];
            }
        ?>
    </body>
</html>