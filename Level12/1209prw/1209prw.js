/**
 * Definindo função literal anônima (arrow functions)
 * É o mesmo que: var intSum = function(n1, n2) {...}
 */
var intSum = (n1, n2) => {
  return alert("sum = " + (n1 + n2))
}

//Utilizar função literal (note a ausência de parênteses)
alert(intSum)

//Chamado da variável que guarda a função
intSum("666", " the number of the beast")