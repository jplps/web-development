//Acesso ao botão por meio de objeto btn
var btn = document.getElementById('btn')

//Definição de literal de função
const createVector = () => {
  //Duas maneiras distintas de criar vetores manualmente
  var vector1 = ['sunday', 'monday', 'tuesday']
  var vector2 = new Array('sunday', 'monday', 'tuesday')

  //Acessando células do vetor com for
  var days = 'Vector 1: '
  for (let i = 0; i < vector1.length; i++) {
    days = days + '\n' + vector1[i]
  }
  //Acessando células do vetor com foreach
  days += '\n' + 'Vector 2:'
  vector2.forEach(day => {
    days += "\n" + day
  })
  alert(days)
}

//Associar evento click ao botão
btn.addEventListener('click', createVector)