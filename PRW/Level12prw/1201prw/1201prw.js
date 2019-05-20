//Acesso a qualquer tag no navegador, em forma de objeto:
var button = document.getElementById('btn') //Objeto *document* representa o DOM

//Arrow Functions:
onclick = () => {
  button.style.color = 'white'
  button.style.backgroundColor = 'red'
  alert('style have changed')
}