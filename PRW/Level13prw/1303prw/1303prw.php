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
			input{margin:5px 0; width:30px;}
      .showme{display:inline-block;}
			button{display:block; margin:10px auto; border:1px solid #6666; padding:5px 15px;}
    </style>
  </head>

  <body>
    <h1>js checkbox handler</h1>
    
    <!-- Utilizando JS para determinar o número de checkbox marcados -->
    <form method="post" id="form" novalidate>
      <fieldset>
        <legend>programming langs</legend>
        
        <label class="align">choose languages</label>
        <br />
        <input type="checkbox" value="java" id="java">java
        <br />
        <input type="checkbox" value="javascript" id="javascript">javascript
        <br />
        <input type="checkbox" value="php" id="php">php
        <br />
        <input type="checkbox" value="python" id="python">python
        <br />
        <input type="checkbox" value="cpp" id="cpp">cpp
        <br />

        <button type="submit">register</button>
      </fieldset>
    </form>

    <script src="1302prw.js"></script>
  </body>
</html>