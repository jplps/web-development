//Acessando a div para o retorno de dados
var div_return = document.getElementById('DivReturn')

processAjax = e => {
  e.preventDefault()

  //Criando objeto AJAX
  var ajax = new XMLHttpRequest()
  
  //Acessar todos os elementos que irão transferir dados pro PHP
  var reg = myform.reg.value
  var uc = myform.uc.value
  var g0 = myform.g0.value
  var g1 = myform.g1.value

  //Acesso à opção marcada pelo usuário dentro do select
  var operation = myform.operation.value
  /**
   * Obs: caso necessite acessar o texto de um determinado select:
   * var operation_text = myform.operation.option[myform.operation.selectedIndex].text
   */

  //POST requer abordagem sequencial:
  //1. Abrir requisição SEM ALTERAÇÃO DA URL
  ajax.open('POST', '1404prw.php', true)
  
  /**
   * 2. Envío ao PHP do cabeçalho http por meio do objeto AJAX.
   * AVISO: Este comando deve estar APÓS o método open()! 
   */
  ajax.setRequestHeader('content-type', 'application/x-www-form-urlencoded')

  //3. A montagem da query string deve vir antes do método send()
  var data = "reg=" + reg + "&uc=" + uc + "&g0=" + g0 + "&g1=" + g1 + "&operation=" + operation

  //4. Enviar dados via ajax no corpo do protocolo HTTP
  ajax.send(data)

  //5. Implementando resposta do JS no retorno do AJAX do servidor
  ajax.onload = () => {
    if(ajax.status == 200){
      div_return.innerHTML = ajax.responseText
      div_return.setAttribute('class', 'showme')
    }
  }
}

//Acesso ao objeto já criado pelo JS através do atributo "name"
myform.addEventListener('submit', processAjax);