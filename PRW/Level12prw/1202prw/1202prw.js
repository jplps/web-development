//Acesso a qualquer tag no navegador, em forma de objeto:
var button = document.getElementById('btn') //Objeto *document* representa o DOM

var firstparagraph = document.getElementById('first')
var secondparagraph = document.getElementById('second')
var thirdparagraph = document.getElementById('third')

const concatenate = () => {
  var text1 = firstparagraph.innerHTML
  var text2 = secondparagraph.innerHTML

  var text3 = `Concatenated: <br /> 
    ${text1} <br />
    ${text2}
  `
  thirdparagraph.innerHTML = text3
}

//Arrow Functions:
button.onclick = () => {
  concatenate()
}

