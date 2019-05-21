function sum(){
  //Todas as variáveis criadas dentro de uma função são locais;
  var age = document.getElementById('age')
  var balance = document.getElementById('balance')
  
  //Acessando conteúdo de uma caixa de formulário:
  var num_1 = age.value
  var num_2 = balance.value

  /**
   * ADIÇÃO E CONCATENAÇÃO
   * 
   * A prioridade do JavaScript ao encontrar o operador matemático 
   * "+" é a concatenação. Para escapar deste padrão e explicitar a
   * soma matemática, devemos converter as strings (tudo que vem de
   * um formulário, para o js, é observado como string).
   * 
   * Obs.: NaN = Not a Number
   */
  num_1_conv = parseInt(num_1)
  num_2_conv = parseFloat(num_2)

  //Testando o sucesso da conversão (js compara os caracteres):
  if(num_1 == num_1_conv && num_2 == num_2_conv){
    var sum = num_1_conv + num_2_conv
    alert("the sum is " + sum + "!")
  }
  else
    alert("the sum failed.")

  //Todos os outros sinais são tratados normalmente!
  var sub = num_1 - num_2
  alert("the subtraction is " + sub + "!")
}

//Setting onclick event
var button = document.getElementById('btn') //Objeto *document* representa o DOM
button.onclick = () => {
  sum()
}