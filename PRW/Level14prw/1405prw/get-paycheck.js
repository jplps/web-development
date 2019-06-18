//Acessando a div para o retorno de dados
var div_return = document.getElementById('DivReturn')
//Acesso ao select
var select = myform.employees

processAjax = () => {
  var ajax = new XMLHttpRequest()
  //Acesso ao texto dentro da <option> de um select
  var employee = select.options[select.selectedIndex].text
  //Query string
  var data = 'employee=' + employee
  ajax.open('GET', 'show-paycheck.php?' + data, true)
  ajax.send(null)
  ajax.onload = () => {
    if(ajax.status == 200){
      div_return.innerHTML = ajax.responseText
      div_return.setAttribute('class', 'showme')
    }
  }
}

//Acesso ao botão para atribuir evento "click"
var submit_btn = myform.submit
submit_btn.addEventListener('click', processAjax);