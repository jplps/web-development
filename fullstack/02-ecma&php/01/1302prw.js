//Acesso ao formulário, atribuição de objeto
var form = document.getElementById('form')
/**
 * Literal de função para validar formulário, recebendo evento e 
 * 
 * Este evento é um objeto oferecido pelo js sempre que criarmos 
 * uma função que trata de um evento. Pode receber qualquer nome
 * para referência dentro do escopo.
*/
const validateChecks = e => {
  //Criando objetos
  var checkjava = document.getElementById('java')
  var checkjavascript = document.getElementById('javascript')
  var checkphp = document.getElementById('php')
  var checkpython = document.getElementById('python')
  var checkcpp = document.getElementById('cpp')

  //Guardar quantidade marcada
  var qtmarked = 0

  //Contando conforme marcação
  if (checkjava.checked) {
    qtmarked++
  }
  if (checkjavascript.checked) {
    qtmarked++
  }
  if (checkphp.checked) {
    qtmarked++
  }
  if (checkpython.checked) {
    qtmarked++
  }
  if (checkcpp.checked) {
    qtmarked++
  }

  //Utilizando contador
  if (qtmarked == 0) {
    alert('You must choose at least one language.')
  }
  if (qtmarked > 2) {
    alert('You must choose two languages maximum.')
  }

  alert('You selected ' + qtmarked + ' languages.')
}

//Associar evento submit ao formulário
form.addEventListener('submit', validateChecks)

