<?php
    //Criação do array antes de carregar o html:
    $students = [
        "Maria das Graças" => 6.5,
        "Paulo de Almeida" => 7.8,
        "Rogério da Silva" => 4.2,
        "Jerusa Fontes" => 8.5,
        "Alícia Marques" => 9.0,
        "Zenon Mendes" => 7.1
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
            table{width: 50%; margin: auto; border: 1px solid #666; border-collapse: collapse;}
            caption{text-align: left; font-style: italic; margin-bottom: 5px;}
            th{background: #999;}
            td{padding-left: 10px;}
            td.centralize, p{text-align: center;}
            td, th{border: 1px solid #b1b1b1;}
            button{display: block; margin-left: auto;}
        </style>
    </head>

    <body>
        <h1>php arrays</h1>

        <br/><br/>

        <form id="form" action="801prw.php" method="post">
            <fieldset>
                <legend>Arrays Interactions</legend>

                <!-- Action = "/path/to/file" -->

                    <label for="">Select Student</label>
                    <select name="StudentsArray">
                        <?php
                            //Laço de repetição "foreach($variable as $key => $value)":
                            foreach ($students as $student => $grade)
                                echo "<option>$student</option>";
                        ?>
                    </select>

                    <br/>

                    <label for="">Student's Name</label>
                    <input type="text" name="StudentName"/>

            </fieldset>

            <fieldset>
                <legend>Arrays Operations</legend>
                    <label for="">Select Operation:</label>
                    <input type="radio" name="operation" value="1"/>Selected Student Grade
                    
                    <br/><br/>

                    <input type="radio" name="operation" value="2"/>Students Decreased<br/>
                    <input type="radio" name="operation" value="3"/>Grades Growing<br/>
                    <input type="radio" name="operation" value="4"/>Check Existence<br/>
                    <input type="radio" name="operation" value="5"/>Show Average<br/>
                    <input type="radio" name="operation" value="6"/>Above Average<br/>
                    <input type="radio" name="operation" value="7"/>Lowest Grade<br/>
                    <input type="radio" name="operation" value="8"/>Convert Array to String<br/>
                    <input type="radio" name="operation" value="9"/>Generate Scoped Table<br/>

                <br/>

                <button type="submit" form="form" name="send">Submit</button>
            </fieldset>
        </form>

        <!-- Script php para processamento de dados: -->
        <?php
            //Receber dados do formulário, processados somente após o "submit":
            if(isset($_POST["send"])){ //Após submit setado como true (function "is set"), executar código;
                $operation = $_POST["operation"]; //Atribuição do valor "value";

                //Os valores recebidos pelo formulário em php são tratados inicialmente como string:
                if ($operation == "1"){
                    //Receber o nome do aluno selecionado no select:
                    $student = $_POST["StudentsArray"];

                    $grade = $students[$student];
                    
                    echo "<p> ", $student," grade is $grade/10.0</p>";
                }

                //Ordenação de alunos inversamente (de Z para A):
                else if ($operation == "2"){
                    //Utilização de ordenação krsort():
                    krsort($students);

                    //Mostrar os dados ordenados em table:
                    echo "
                    <table>
                        <caption>Student Data Decreased - From Z to A</caption>

                        <tr>
                            <th>Student</th>
                            <th>Grade</th>
                        </tr>";

                        foreach ($students as $student => $grade)
                            echo "
                            <tr>
                                <td>$student</td>
                                <td>$grade</td>
                            </tr>
                            ";

                    echo "</table>";
                }

                else if ($operation == "3"){
                    //Utilização de ordenação krsort():
                    asort($students);

                    //Mostrar os dados ordenados em table:
                    echo "
                    <table>
                        <caption>Student Grade Naturally Ordenated</caption>

                        <tr>
                            <th>Student</th>
                            <th>Grade</th>
                        </tr>";

                        foreach ($students as $student => $grade)
                            echo "
                            <tr>
                                <td>$student</td>
                                <td>$grade</td>
                            </tr>
                            ";

                    echo "</table>";
                }

                else if ($operation == "4"){
                    //Receber o nome do aluno fornecido no input:
                    $student = $_POST["StudentName"];
                    
                    //Usar função pronta (exemplo: "in_array($value, $array)"):
                    $exists = array_key_exists($student, $students);

                    if ($exists) {
                        $grade = $students[$student];
                        echo "<p>
                            $student EXISTS, and the grade is $grade/10.0!
                        </p>";
                    }

                    else
                        echo "<p>
                            $student DON'T EXIST!
                        </p>";
                }

                else if ($operation == "5"){
                    //Função de soma dos elementos de um array (array_sum) e de contagem de índice (count):
                    $media = array_sum($students) / count($students);

                    $mediaded = number_format($media, 2);

                    echo "<p>
                        The general Average is $mediaded/10.0!
                    </p>";
                }

                else if ($operation == "6"){
                    //Função de soma dos elementos de um array (array_sum) e de contagem de índice (count):
                    $media = array_sum($students) / count($students);

                    $aux = 0; //Contar o número de alunos acima da média geral;

                    foreach ($students as $student => $grade)
                        if($grade > $media)
                            $aux++;

                    echo "<p>
                        $aux students are Above the Average.
                    </p>";
                }
                
                else if ($operation == "7"){
                    //Retorno do menor valor do array max($array) ou min($array):
                    $lg = min($students);

                    $student = array_search($lg, $students); //Atribuindo valor ao índice;

                    echo "<p>
                        Lowest $lg/10.0 belongs to $student.
                    </p>";
                }

                else if ($operation == "8"){
                    //Função (implode) para converter array em string:
                    $studentsString = implode(" - ", $students);

                    echo "<p>
                        Success!

                        <br/>

                        \$students elements = $studentsString
                    </p>";
                }

                else if ($operation == "9"){
                    //Adicionar, manualmente, mais alguns dados no array:
                    $students["João Lima"] = 9.9;
                    $students["Wanussa Silva"] = 9.8;
                    
                    //Mostrar os dados ordenados em table:
                    echo "<table>
                        <caption>Students Added</caption>

                        <tr>
                            <th>Student</th>
                            <th>Grade</th>
                        </tr>";

                        foreach ($students as $student => $grade)
                            echo "
                            <tr>
                                <td>$student</td>
                                <td>$grade</td>
                            </tr>
                            ";

                    echo "</table>";
                }
                
                else
                    echo "<p>
                        This is the \"no option\" warning!
                        <br/>
                        Choose one above, and click Submit again!
                    </p>";
            }
        ?>
    </body>
</html>