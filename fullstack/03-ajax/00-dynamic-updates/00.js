// Criando objeto da div de retorno
var div_return = document.getElementById('return')

const processAjax = event => {
  // 1. Criar objeto ajax
  var ajax = new XMLHttpRequest()

  // 2. Tratamento de resposta vinda do servidor
  ajax.onload = () => {
    if (ajax.status == 200) {
      // Traz o comando echo do arquivo 1401prw.php
      div_return.innerHTML = ajax.responseText
      div_return.setAttribute('class', 'showme')
    }
  }

  // 3. Iniciar conexão entre cliente e servidor com método open()
  ajax.open('GET', '1401prw.php', true)

  // 4. Enviar requisição ao servidor
  ajax.send(null)

  event.preventDefault()
}

// Criando objeto link e atribuindo evento
var link = document.getElementById('link').addEventListener('click', processAjax)
