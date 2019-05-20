//Acesso a qualquer tag no navegador, em forma de objeto:
var button = document.getElementById('btn') //Objeto *document* representa o DOM

//Arrow Functions:
button.onclick = () => {
  button.style.color = 'white'
  button.style.backgroundColor = 'red'
  alert('style have changed')
}