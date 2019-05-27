function putBorder(paragraph){
  paragraph.style.boxShadow = "0 0 2px 2px rgba(0,0,0,0.5)"
}

function changeText(button){
  var value = button.value
  if(value == "1"){
    button.innerText = "i have changed see"
    button.value = "2"
  }
  else{
    button.innerText = "change my text brow"
    button.value = "1"
  }
}