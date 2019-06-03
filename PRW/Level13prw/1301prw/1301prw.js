//Acesso ao formulário, atribuição de objeto
var form = document.getElementById('form')
/**
 * Literal de função para validar formulário, recebendo evento e 
 * 
 * Este evento é um objeto oferecido pelo js sempre que criarmos 
 * uma função que trata de um evento. Pode receber qualquer nome
 * para referência dentro do escopo.
*/
const validateForm = e => {
  //Cancelar evento padrão (navegador não dispara o evento e)
  e.preventDefault()
  //Criação de objetos para mostrar erros
  var mailerror = document.getElementById('mailerror')
  var passerror = document.getElementById('passerror')
  var passconfirmerror = document.getElementById('passconfirmerror')
  var registryerror = document.getElementById('registryerror')
  var justificationerror = document.getElementById('justificationerror')
  //Acessar valores inputados pelo usuário
  var email = document.getElementById('email').value
  var pass = document.getElementById('pass').value
  var passconfirm = document.getElementById('passconfirm').value
  
}

//Associar evento submit ao formulário
form.addEventListener('submit', validateForm)

