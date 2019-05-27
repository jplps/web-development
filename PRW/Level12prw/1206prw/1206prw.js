//Definindo janela (var = global variable)
var myWindow

//Definindo funções utilizadas no html:
function openWindow() {
  myWindow = window.open("", "my-Window", "width=400,height=200, resizable=no") //Scoped (local)
}

function closeWindow() {
  myWindow.close()
}