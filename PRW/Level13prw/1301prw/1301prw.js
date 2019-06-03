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

  
}

//Associar evento submit ao formulário
form.addEventListener('submit', validateForm)

