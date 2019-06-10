//Criando objeto da div de retorno
var p_return = document.getElementById('return')

const processAjax = e => {
  var ajax = new XMLHttpRequest()

  //Acessar todos os elementos que irão transferir dados pro PHP
  var name = myform.name.value
  var weight = myform.weight.value
  var height = myform.height.value

  //Montando query string para que o AJAX envie dados ao PHP (SEMPRE antes do método send)
  var data = '?name=' + name + '&weight=' + weight + '&height=' + height

  //Implementando resposta do JS no retorno do AJAX do servidor
  ajax.onload = () => {
    if(ajax.status == 200){
      p_return.innerHTML = ajax.responseText
      p_return.setAttribute('class', 'showme')
    }
  }

  ajax.open('GET', '1402prw.php' + data, true)
  ajax.send(null)

  e.preventDefault()
}

/**
 * JavaScript automaticamente disponibiliza um objeto formulario
 * quando utilizamos o atributo name da tag form 
 */
myform.addEventListener('submit', processAjax)