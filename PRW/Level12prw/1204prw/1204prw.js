//Inicializando prompt - pedindo nome completo (null se não for providenciado)
var name = prompt('Name:', 'John Doe')

//Mudando dinamicamente o conteúdo da página conforme teste lógico:
if(name)
  document.getElementById('paragraph').innerHTML = 'Hi there ' + name + '!'