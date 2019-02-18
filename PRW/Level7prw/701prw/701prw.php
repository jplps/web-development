<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:
        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;
        Ex.: 1 - Formulários & PHP (excs11).
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PRW 701</title>

        <style>
            body{text-align: center;}
            h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
            text-transform: capitalize;}
            fieldset{width: 40%; margin: auto;}
            span{font-weight: bold; font-size: 150%;}
        </style>
    </head>

    <body>
        <!--
            O método corresponde ao vetor $_POST, já existente no
            PHP, utilizando os "name"s para ordená-los, e guardando os dados
            fornecidos em cada input em seus respectivos endereços:
        -->
        <h1>php form 2</h1>

        <br/><br/>

        <fieldset>
            <form id="firstForm" action="701bprw.php" method="post">
                <label for="">Nota 1:</label>
                <input type="number" name="num1" step="0.01"/>

                <br/>

                <label for="">Nota 2:</label>
                <input type="number" name="num2" step="0.01"/>

                <br/>

                <label for="">Nota 3:</label>
                <input type="number" name="num3" step="0.01"/>
            </form>

            <br/>

            <button type="submit" form="firstForm" value="submit">Submit</button>
        </fieldset>
    </body>
</html>