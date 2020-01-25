// Acesso ao formulário, atribuição de objeto
var form = document.getElementById('form')
/**
 * Literal de função para validar formulário, recebendo evento e 
 * 
 * Este evento é um objeto oferecido pelo js sempre que criarmos 
 * uma função que trata de um evento. Pode receber qualquer nome
 * para referência dentro do escopo.
*/
const validateForm = e => {
  // Controle de erros
  var errors = false

  // Cancelar evento padrão (navegador não dispara o evento e)
  e.preventDefault()

  // Criação de objetos para mostrar erros
  var mailerror = document.getElementById('mailerror')
  var passerror = document.getElementById('passerror')
  var passconfirmerror = document.getElementById('passconfirmerror')
  var registryerror = document.getElementById('registryerror')
  var justificationerror = document.getElementById('justificationerror')

  // Acessar valores inputados pelo usuário
  var email = document.getElementById('email').value
  var pass = document.getElementById('pass').value
  var passconfirm = document.getElementById('passconfirm').value
  var justification = document.getElementById('justification').value
  // Acessar valores em inputs do tipo radio (sem atributo value)
  var radio1 = document.getElementById('radio1')
  var radio2 = document.getElementById('radio2')

  // Validação de email
  // Usando expressão regular para testar email (regex)
  var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  // Testando email conforme expressão (método test retorna boolean)
  var result = filter.test(email)
  if (!result) {
    mailerror.innerText = 'Invalid e-Mail.'
    mailerror.setAttribute('class', 'showme')
    errors = true
  }
  else mailerror.setAttribute('class', '')

  // Validação de senha e confirmação de senha
  /**
   * Testando a senha, o método trim elimina espaços vazíos (em 
   * branco) antes e depois dos caracteres (permite espaços no meio 
   * da senha!)
   */
  pass = pass.trim()
  // Testando quantidade de caracteres (método length)
  if (pass.length < 6) {
    passerror.innerText = 'Pass cannot contain less than 6 characters.'
    passerror.setAttribute('class', 'showme')
    errors = true
  }
  else passerror.setAttribute('class', '')
  // Testando confirmação de senha (sem espaços ao redor)
  passconfirm = passconfirm.trim()
  if (passconfirm != pass) {
    passconfirmerror.innerText = 'Passes do not match.'
    passconfirmerror.setAttribute('class', 'showme')
    errors = true
  }
  else passconfirmerror.setAttribute('class', '')

  // Validação dos botões de radio (ao menos um botão de radio deve ser selecionado)
  if (!radio1.checked && !radio2) {
    registryerror.innerText = 'Select an option.'
    registryerror.setAttribute('class', 'showme')
    errors = true
  }
  else registryerror.setAttribute('class', '')

  // Validação do textarea (sem espaços ao redor e não pode ser vazía)
  justification = justification.trim()
  if (justification.length == 0) {
    justificationerror.innerText = 'Justification is mandatory.'
    justificationerror.setAttribute('class', 'showme')
    errors = true
  }
  else justificationerror.setAttribute('class', '')

  // Lidando com os erros (se existir algum, não executar ação padrão)
  if (errors) e.preventDefault()
}

// Associar evento submit ao formulário
form.addEventListener('submit', validateForm)

