// Acessando a div para o retorno de dados
var div_return = document.getElementById('DivReturn')
// Acesso ao select
var select = myform.employees

processAjax = e => {
  e.preventDefault()
  var ajax = new XMLHttpRequest()
  ajax.open('GET', 'get-employees.php', true)
  ajax.send(null)
  ajax.onload = () => {
    if (ajax.status == 200) {
      select.innerHTML = ajax.responseText
      select.setAttribute('class', 'showme')
    }
  }
}

// Acesso ao botão para atribuir evento "click"
var fulfill_btn = myform.fulfill
fulfill_btn.addEventListener('click', processAjax);