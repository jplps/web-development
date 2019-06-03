<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript</title>

    <style>
      body{color:#666; margin:0 auto;}
      h1{border-bottom:2px solid #666; margin:auto; padding:10px; width:80vw;
      text-transform:uppercase; text-align:center; position:sticky; top:0;}
      fieldset{margin:auto; width:66.6%; margin-top:20px; text-transform:capitalize;}
			.align {display:inline-block; width:30%; text-align:left;}
			input, textarea{margin:5px 0; width:150px;}
      input[type="email"]{width:300px;}
      input[type="radio"]{width:50px;}
      .top{vertical-align:top;}
      /* 
        Expressões Regulares:

        Note a presença do dollarsign ($) antes da atribuição no seletor.
        O navegador selecionará somente expressões que terminem com o
        valor passado.

        No mesmo posicionamento, poderemos utilizar o asterísco (*) para
        selecionar os valores que aparecem no começo da expressão, e o
        acento circunflexo (^) para valores que apareçam no "meio".
       */
      label[id$="error"]{display:none; color:#f00;}
      /* Classe manipulada pelo JavaScript */
      .showme{display:inline-block;}
			button{display:block; margin:10px auto; border:1px solid #6666; padding:5px 15px;}
    </style>
  </head>

  <body>
    <h1>js form validation</h1>
    
    <!-- Atributo novalidate cancela a ação padrão de validação do navegador -->
    <form method="post" id="form" novalidate>
      <fieldset>
        <legend>course registry</legend>
        
        <label class="align">email *</label>
        <input type="email" name="email" id="email" autofocus />
        <label id="mailerror"></label>
        <br />

        <label class="align">pass (min. 6 chars)</label>
        <input type="password" name="pass" id="pass" />
        <label id="passerror"></label>
        <br />

        <label class="align">confirm pass</label>
        <input type="password" name="passconfirm" id="passconfirm" />
        <label id="passconfirmerror"></label>
        <br />
        <br />

        <label class="align">registry type *</label>
        <br />
        <label id="registryerror"></label>
        <input type="radio" name="course" id="1" />tutor
        <br />
        <input type="radio" name="course" id="2" />student
        <br />
        <br />
        
        <label class="align top">justification *</label>
        <textarea type="text" name="justification" id="justification"></textarea>
        <label class="top" id="justificationerror"></label>

        <button type="submit" name="submit">register</button>
      </fieldset>
    </form>

    <?php
      if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        
        echo "<p>
          Your data has been recieved. Check your email soon.
        </p>";
      }
    ?>

    <script src="1301prw.js"></script>
  </body>
</html>