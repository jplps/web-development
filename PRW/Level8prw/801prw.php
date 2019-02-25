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
            body{color: #666;}
            h1{width: 60%; border-bottom: 2px solid #666; margin: auto; padding: 10px;
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

            <!-- Action = "/path/to/file" -->
            <form id="form" action="801prw.php" method="get">
                <label for="">Select Student</label>
                <select name="students">
                    <?php
                        //Laço de repetição "foreach($variable as $key => $value)":
                        foreach ($students as $student => $grade) {
                            echo "<option>$student</option>";
                        }
                    ?>
                </select>

                <br/>

                <label for="">Student's Name</label>
                <input type="text" name="student"/>
            </form>
        </fieldset>

        <fieldset>
            <legend>Arrays Operations</legend>

            <form action="">
                <label for="">Select Operation</label>

                <br/>

                <input type="radio" name="operation" value="1"/>Student Grade<br/>
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

        <!-- Script php para processamento de dados: -->
        <?php
            //Receber dados do formulário, processados somente após o "submit":
            if(isset($_POST["submit"])){ //Após submit setado como true (function "is set"), executar código;
                $operation = $_POST["operation"]; //Atribuição do valor "value";

                //Os valores recebidos pelo formulário em php são tratados inicialmente como string:
                if ($operation == "1"){
                    //Receber o nome do aluno selecionado no select:
                    $student = $_POST["student"];

                    $grade = $students[$student];
                    
                    echo "<p> $student grade is $grade.</p>";
                }

                //Ordenação de alunos inversamente (de Z para A):
                else if ($operation == "2"){

                }

                else if ($operation == "3"){}

                else if ($operation == "4"){}

                else if ($operation == "5"){}

                else if ($operation == "6"){}
                
                else if ($operation == "7"){}

                else if ($operation == "8"){}

                else if ($operation == "9"){}
                
                else {}
            }
        ?>
    </body>
</html>