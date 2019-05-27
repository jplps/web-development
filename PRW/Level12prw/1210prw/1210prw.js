//Criando objetos para manipulações
var button = document.getElementById("btn")
var input = document.getElementById("num")
var paragraph = document.getElementById("container")

//Declarando literal
var extract = () => {
  //Acessando o valor numérico
  var num = input.value
  var square_root = Math.sqrt(num) //Extração da raíz com a lib Math
}

//Associar cada evento ao seu objeto com literais
button.addEventListener('click', extract)