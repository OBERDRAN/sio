function checkNumber(valor) {
  var regra = /^[0-9]+$/;
  if (valor.match(regra)) {
    alert("Numero: "+valor);
  }else{
    alert("Permitido somente número!");
  }
}