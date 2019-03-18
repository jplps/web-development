<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:
        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;
        Ex.: 1 - Function & Include
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PRW 901</title>

        <style>
            body{width: 80%; color: #666; margin: auto;}
            h1{border-bottom: 2px solid #666; margin: auto; padding: 10px;
            text-transform: capitalize; text-align: center;}
            fieldset{margin-top: 20px}
        </style>
    </head>

    <body>
        <h1>php function & include 1</h1>

        <form id="form" action="" method="post">
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
                <legend>Operations</legend>
                <button type="submit" form="form" name="approvals">Approvals</button>

                <button type="submit" form="form" name="rendiment">Rendiment</button>

                <button type="submit" form="form" name="distak">Distak</button>
            </fieldset>
        </form>

        <?php
            if(isset($_POST["rendiment"])){
                //Recebe matrícula do select:
                $reg = $_POST["reg"];

                //Acesso a dados:
                $name = $students[$reg][0];
                $avtests = $students[$reg][1];
                $avexs = $students[$reg][2];

                $avfinal = ($avtests * 7 + $avexs * 3)/10;

                echo "<p>
                    Selected Data:
                    <br/><br/>
                    Student: $name<br/>
                    Registration: $reg<br/>
                    Tests Average: $avtests<br/>
                    Exercise Average: $avexs
                    <br/><br/>
                    Final Average: $avfinal
                    <br/><br/>
                ";
            }

            else if(isset($_POST["approvals"])){
                //Auxilio para armazenamento de dados:
                $auxArray = array();

                foreach ($students as $reg => $interVector) {
                    //Acessando dados do vetor interno de cada student:
                    //Acesso a dados:
                    $name = $students[$reg][0];
                    $avtests = $students[$reg][1];
                    $avexs = $students[$reg][2];

                    $avfinal = ($avtests * 7 + $avexs * 3)/10;

                    if ($avfinal >= 6) {
                        //Guardar no array auxiliar:
                        $auxArray[$reg][0] = $name;
                        $auxArray[$reg][1] = $avfinal;
                    }
                }

                // //Referência:
                // echo "<pre>";
                // print_r($auxArray);
                // echo "</pre>";

                echo "
                <br/>
                <table>
                    <tr>
                        <th>Registration</th>
                        <th>Name</th>
                        <th>Final Av.</th>
                    </tr>";

                    foreach ($auxArray as $reg => $internVector)
                        echo "
                        <tr>
                            <td>$reg</td>
                            <td>$internVector[0] </td>
                            <td>$internVector[1] </td>";
                        
                        echo "</tr>";
                echo "</table>";
            }

            else if(isset($_POST["distak"])){
                //Aux para armazenar matrícula e desempenho:
                $auxArray = [];

                foreach ($students as $reg => $internVector) {
                    $avfinal = ($internVector[1] * 7 + $internVector[2] * 3)/10;

                    //Guarda media final e matrícula no vetor auxiliar:
                    $auxArray[$reg] = $avfinal;
                }

                // //Referência:
                // echo "<pre>";
                // print_r($auxArray);
                // echo "</pre>";

                //Função max() para percorrer vetor e checar maior elemento:
                $highest = max($auxArray);

                //Recuperar a matrícula no vetor auxiliar:
                $regdistak = array_search($highest, $auxArray);

                //Recuperando nome através da matricula:
                $namedistak = $students[$regdistak][0];

                echo "<p>
                    Distak Data:
                    <br/><br/>
                    Student: $namedistak<br/>
                    Registration: $regdistak
                    <br/><br/>
                    Final Average: $highest
                </p>";
            }
        ?>
    </body>
</html>