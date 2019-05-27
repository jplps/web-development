//Criando objetos para manipulações
var button = document.getElementById("btn")
var input = document.getElementById("num")
var paragraph = document.getElementById("container")

//Declarando literal
var extract = () => {
  //Acessando o valor numérico
  var num = input.value
  //Extração da raíz com a lib Math
  var square_root = Math.sqrt(num)
  // square_root = square_root.toLocaleString('pt-br') //Formatação local
  //Alterando conteúdo do container
  paragraph.innerText = square_root
}

//Associar cada evento ao seu objeto com literais
button.addEventListener('click', extract)