const processAjax = e => {
  var ajax = new XMLHttpRequest()

  // Acessar todos os elementos que irão transferir dados pro PHP
  var name = myform.name.value
  var weight = myform.weight.value
  var height = myform.height.value

  // Criando objeto da div de retorno
  var p_return = document.getElementById('return')

  // POST requer abordagem sequencial:
  // 1. Abrir requisição SEM ALTERAÇÃO DA URL
  ajax.open('POST', '1403prw.php', true)

  /**
   * 2. Envío ao PHP do cabeçalho http por meio do objeto AJAX.
   * AVISO: Este comando deve estar APÓS o método open()! 
   */
  ajax.setRequestHeader('content-type', 'application/x-www-form-urlencoded')

  // 3. A montagem da query string deve vir antes do método send()
  var data = "name=" + name + "&weight=" + weight + "&height=" + height

  // 4. Enviar dados via ajax no corpo do protocolo HTTP
  ajax.send(data)

  // 5. Implementando resposta do JS no retorno do AJAX do servidor
  ajax.onload = () => {
    if (ajax.status == 200) {
      p_return.innerHTML = ajax.responseText
      p_return.setAttribute('class', 'showme')
    }
  }

  e.preventDefault()
}

/**
 * JavaScript automaticamente disponibiliza um objeto formulario
 * quando utilizamos o atributo name da tag form 
 */
myform.addEventListener('submit', processAjax)