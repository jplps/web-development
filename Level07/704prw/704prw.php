<!DOCTYPE html>
<html lang="en">
    <!--
        Notas:
        Diretório geral em debian-based distros: /var/www/html;
        Endereço http://localhost/path/to/file.php para acessar a aplicação;
        Ex.: 4 - Formulários & PHP (excs15).
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PRW 704</title>

        <style>
            body{text-align: center;}
            h1{width: 60%; border-bottom: 2px solid #000; margin: auto; padding: 10px;
            text-transform: capitalize;}
            fieldset{width: 40%; margin: auto;}
            input{width: 20%; align: left;}
            span{font-weight: bold; font-size: 150%;}
        </style>
    </head>

    <body>
        <h1>php form 4</h1>

        <br/><br/>

        <fieldset>
            <form id="form" action="704bprw.php" method="get">
                <label for="">Positive Real Number (x)</label>
                <input type="number" name="num" min="0" step="any"/>
            </form>

            <br/>

            <button type="submit" form="form" value="submit">Submit to Result</button>
        </fieldset>
    </body>
</html>