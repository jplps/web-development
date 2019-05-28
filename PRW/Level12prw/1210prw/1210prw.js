//Criação objetos para manipulações
var button = document.getElementById('btn')
var showButton = document.getElementById('btns')
var input = document.getElementById('num')
var paragraph = document.getElementById('container')

//Declaração de literais
var extract = () => {
  //Acesso ao valor numérico
  var num = input.value
  //Extração da raíz com a lib Math
  var square_root = Math.sqrt(num)
  //Formatação local com arredondamento
  // square_root = square_root.toLocaleString('pt-br', {maximumFractionDigits:2})
  //Alteração do conteúdo do container
  paragraph.innerText = square_root
  //Ativação da classe do container (sem influenciar diretamente o css com paragraph.style.display)
  paragraph.setAttribute('class', 'show')
  showButton.setAttribute('class', 'show')
}

var showMe = () => {
  //Teste lógico para definir a classe do paragrafo
  if(paragraph.className)
    paragraph.setAttribute('class', '')
  else
    paragraph.setAttribute('class', 'show')
}

//Associação de cada evento ao seu objeto com literais definidos
button.addEventListener('click', extract)
showButton.addEventListener('click', showMe)